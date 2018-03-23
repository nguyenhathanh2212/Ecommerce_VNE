@extends ('templates.admin.master')

@section ('content')
    <h5 class="tit"><i class="fa fa-product-hunt"></i>  @lang('lang.product')</h5>
    @include ('notice.notice')
    {{ Form::open(['route' => ['admin.product.update', 1], 'files' => true]) }}
        @method('PUT')
        {{ Form::label('left', trans('lang.name') . ': (*)', ['class' => 'left-login']) }}
        <div class="right-login">
            {{ Form::text('name', $product->name, ['class' => 'input-right', 'required' => '']) }}
            <br/><br/>
        </div>
        <div class="clr"></div>
        {{ Form::label('left', trans('lang.preview') . ': (*)', ['class' => 'left-login']) }}
        <div class="right-login">
            {{ Form::text('preview', $product->preview, ['class' => 'input-right', 'required' => '']) }}
            <br/><br/>
        </div>
        <div class="clr"></div>
        {{ Form::label('left', trans('lang.description') . ': (*)', ['class' => 'left-login']) }}
        <div class="right-login">
            {{ Form::textarea('description', $product->description, ['class' => 'input-right text-area', 'required' => '']) }}
            <br/><br/>
        </div>
        <div class="clr"></div>
        {{ Form::label('left', trans('lang.category') . ': (*)', ['class' => 'left-login']) }}
        <div class="right-login row">
            <div class="col-md-6">
                {{ Form::select('parent_id', $parentCategries, $product->category->parentCategory->id, ['class' => 'parent-category']) }}
            </div>
            <div class="col-md-6">
                {{ Form::select('category_id', $subCategries, $product->category->id, ['class' => 'sub-category']) }}
            </div>
        </div>
        <div class="clr"></div>
        {{ Form::label('left', trans('lang.quanlity') . ': (*)', ['class' => 'left-login']) }}
        <div class="right-login">
            {{ Form::number('quanlity', $product->quanlity, ['class' => 'input-right', 'required' => '']) }}
            <br/><br/>
        </div>
        <div class="clr"></div>
        {{ Form::label('left', trans('lang.price') . ': (*)', ['class' => 'left-login']) }}
        <div class="right-login">
            {{ Form::number('price', $product->customPrice, ['class' => 'input-right', 'required' => '']) }}
            <br/><br/>
        </div>
        <div class="clr"></div>
        {{ Form::label('left', trans('lang.discount'), ['class' => 'left-login']) }}
        <div class="right-login">
            {{ Form::number('discount_percent', $product->discount_percent, ['class' => 'input-right', 'required' => '']) }}
            <br/><br/>
        </div>
        <div class="clr"></div>
        @if ($product->pictures()->count())
            {{ Form::label('left', trans('lang.oldPictures') . ': (*)', ['class' => 'left-login']) }}
            <div class="right-login">
                @foreach ($product->pictures as $picture)
                    <div>
                        <br>
                        {{ Form::checkbox('delete_picture') }} @lang('lang.deleteBtn')
                        {{ Html::image(asset($picture->picture), '', ['height' => '70px']) }} 
                        <br>
                    </div>
                @endforeach
            </div>
            <div class="clr"></div> 
            <br>
        @endif
        {{ Form::label('left', trans('lang.pictures') . ': (*)', ['class' => 'left-login']) }}
        <div class="right-login">
            {{ Form::file('pictures[]', ['class' => 'input-right', 'multiple' => '']) }}
        </div>
        <div class="clr"></div> 
        {{ Form::submit(trans('lang.editBtn'), ['class' => 'button']) }}
    {{ Form::close() }}
@endsection
