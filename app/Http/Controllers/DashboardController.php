<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Creator;
use App\Models\Image;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Str;

class DashboardController extends Controller
{
    public function showIndex()
    {
        return view('dashboard.dashboard');
    }

    public function showUsers()
    {
        return view('dashboard.user');
    }

    public function showBlog()
    {
        $articles = Article::all();

        return view('dashboard.pages.blog.show')->with('articles', $articles);
    }

    public function addArticle()
    {
        $creators = Creator::all();
        $tags = Tag::all();

        return view('dashboard.pages.blog.create')->with([
            'creators' => $creators,
            'tags' => $tags
        ]);
    }

    public function storeArticle(Request $request)
    {
        $this->validatePostArticle($request);

        $data = $request->all();

        $savedArticle = Article::create($data);

        $article = Article::find($savedArticle->id);

        $article->tags()->sync($data['tags_id']);

        $this->storeImageArticle($data['title'], $request, $savedArticle->id);

        return redirect()->route('dashboard-blog')->with('success', 'Articulo creado correctamente');
    }

    public function editArticle(Request $request)
    {
        $article = Article::find($request->id);
        $creators = Creator::all();
        $tags = Tag::all();

        return view('dashboard.pages.blog.edit')->with([
            'creators' => $creators,
            'tags' => $tags,
            'article' => $article,
        ]);
    }

    public function updateArticle(Request $request)
    {
        $this->validatePutArticle($request);

        $article = Article::find($request->id);

        $data = $request->all();

        $article->update($data);

        $article->tags()->sync($data['tags_id']);

        if (isset($request->banner)) {
            $article->image->delete();

            $this->storeImageArticle($data['title'], $request, $article->id);
        }

        return redirect()->route('dashboard-blog')->with('success', 'Articulo editado correctamente');
    }

    public function deleteArticle(Request $request)
    {

        $article = Article::find($request->id);

        $article->delete();

        return redirect()->back();

    }

    public function changeVisibility(Request $request)
    {
        $article = Article::find($request->articleId);

        $article->update([
           'visible' => $request->visibility
        ]);

        if ($request->visibility) {
            return Response::json('El articulo ahora esta visible', 200);
        }
        return Response::json('El articulo ahora no esta visible', 200);
    }

    public function showTags()
    {
        $tags = Tag::all();

        return view('dashboard.pages.blog.tag.show')->with('tags', $tags);
    }

    public function addTag()
    {
        return view('dashboard.pages.blog.tag.create');
    }

    public function storeTag(Request $request)
    {
        $this->validatePostTag($request);

        $data = $request->all();

        Tag::create($data);

        return redirect()->route('dashboard-tags')->with('success', 'Tag creado correctamente');
    }

    public function editTag(Request $request)
    {
        $tag = Tag::find($request->id);

        return view('dashboard.pages.blog.tag.edit')->with([
            'tag' => $tag,
        ]);
    }

    public function updateTag(Request $request)
    {
        $this->validateUpdateTag($request);

        $tag = Tag::find($request->id);

        $data = $request->all();

        $tag->update($data);

        return redirect()->route('dashboard-tags')->with('success', 'Tag editado correctamente');
    }

    public function deleteTag(Request $request)
    {

        $tag = Tag::find($request->id);

        $tag->delete();

        return redirect()->route('dashboard-tags')->with('success', 'Tag eliminado correctamente');;

    }

    /**
     * @param Request $request
     */
    private function validatePostArticle(Request $request): void
    {
        $request->validate(
            [
                'title'      => 'required | min:3 | max:60',
                'creator_id' => 'required | numeric',
                'tags_id'    => 'required | array | min:1 | max:5',
                'content'    => 'required | min:50',
                'banner'     => 'required'
            ],
            [
                'title.required'      => 'Tenes que agregar un título',
                'title.min'           => 'El título debe tener como mínimo 3 letras',
                'title.max'           => 'El título debe tener como máximo 60 letras',
                'creator_id.required' => 'Tenes que elegir un creador del articulo',
                'tags_id.required'    => 'Tenes que elegir una categoria',
                'tags_id.min'         => 'Como mínimo tenes que elegir 1 categoria',
                'tags_id.max'         => 'Como máximo podes elegir 5 categorias',
                'content.required'    => 'Tenes que agregar un contenido',
                'content.min'         => 'El contenido del articulo debe ser de al menos 50 letras',
                'banner.required'     => 'Tenes que agregar un banner para el articulo',
            ]
        );
    }

    /**
     * @param Request $request
     */
    private function validatePutArticle(Request $request): void
    {
        $request->validate(
            [
                'title'      => 'required | min:3 | max:60',
                'creator_id' => 'required | numeric',
                'tags_id'    => 'required | array | min:1 | max:5',
                'content'    => 'required | min:50',
            ],
            [
                'title.required'      => 'Tenes que agregar un título',
                'title.min'           => 'El título debe tener como mínimo 3 letras',
                'title.max'           => 'El título debe tener como máximo 60 letras',
                'creator_id.required' => 'Tenes que elegir un creador del articulo',
                'tags_id.required'    => 'Tenes que elegir una categoria',
                'tags_id.min'         => 'Como mínimo tenes que elegir 1 categoria',
                'tags_id.max'         => 'Como máximo podes elegir 5 categorias',
                'content.required'    => 'Tenes que agregar un contenido',
                'content.min'         => 'El contenido del articulo debe ser de al menos 50 letras',
            ]
        );
    }

    /**
     * @param         $title
     * @param Request $request
     * @param         $articleId
     */
    private function storeImageArticle($title, Request $request, $articleId): void
    {
        $imagen = Str::slug($title).'-banner';

        $imagen = $imagen.'.'.$request->file('banner')->extension();

        $pathImagen = $request->file('banner')->storeAs('public/images/banners', $imagen);

        $pathImagen = str_replace('public', 'storage', $pathImagen);

        Image::create([
            'path'       => $request->getSchemeAndHttpHost().'/'.$pathImagen,
            'article_id' => $articleId
        ]);
    }

    /**
     * @param Request $request
     */
    private function validatePostTag(Request $request): void
    {
        $request->validate(
            [
                'title'      => 'required | min:3 | max:60 | unique:tags,title,NULL,id,deleted_at,NULL',
            ],
            [
                'title.required'      => 'Tenes que agregar un título',
                'title.min'           => 'El título debe tener como mínimo 3 letras',
                'title.max'           => 'El título debe tener como máximo 60 letras',
                'title.unique'        => 'Ya existe este tag',
            ]
        );
    }

    /**
     * @param Request $request
     */
    private function validateUpdateTag(Request $request): void
    {
        $request->validate(
            [
                'title'      => "required | min:3 | max:60 | unique:tags,title, {$request->id},id,deleted_at,NULL",
            ],
            [
                'title.required'      => 'Tenes que agregar un título',
                'title.min'           => 'El título debe tener como mínimo 3 letras',
                'title.max'           => 'El título debe tener como máximo 60 letras',
                'title.unique'        => 'Ya existe este tag',
            ]
        );
    }

}
