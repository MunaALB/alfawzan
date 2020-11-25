@extends('backend.layouts.app')
@section('title', 'كل المنتجات')
@section('content')
<div class="page_header d-flex align-items-center">
    <div class="container">
        <section>
            <h2>كل المنتجات</h2>
        </section>
    </div>
</div>
<div class="blog_posts" id="Product_index">
    <div class="container">
        <a href="{{ route('product.create') }}" class=" theme-btn">
            اضافة منتج جديد <i class="icofont-plus"></i>
        </a>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 mb-6 products-filter">
                <ul class="list-inline">
                    <li>
                        <a class="active-filter" href="#" data-filter="*">كل المنتجات</a>
                    </li>
                    @foreach($categories as $category)
                    <li>
                        <a href="#" data-filter="*">{{$category->title}}</a>
                    </li>
                    @endforeach

                </ul>
            </div>
            @foreach($products as $product)
            <div class="col-xl-6">
                <div class="blog-card d-flex flex-sm-row flex-column">
                    <div class="the_post_thumbnail">
                        <a href="#"><img src="{{ asset($product->image) }}" alt="Blog Title" height="260" width="300" /></a>
                    </div>
                    <div class="blog-card-body">
                        <span class="the_date">{{$product->created_at->format('d/m/Y')}}
                        @if($product->is_advertised)

                            <img style="float:left" src="{{ asset('img/icons/star.svg') }}" height="40" width="40" title="يتم عرض هاذا المنتج في الموقع كإعلان">

                        @endif
                        </span>

                        <h2 class="the_title">
                            <a href="#">{{ $product->title }}</a>
                        </h2>
                        <a href="{{ route('product.show',['product'=>$product->id]) }}" class="the_permalink">المزيد <i
                        class="icofont-arrow-left"></i></a><br>

                        <a @click="Delete({{ $product->id}})" class="the_permalink danger mr-3" title="مسح المنتج">
                            <i class="flaticons-001-delete"></i>
                        </a>

                        <a href="{{ route('product.edit',['product'=>$product->id]) }}" class="the_permalink warning" title=" تعديل المنتج">
                            <i class="flaticons-034-edit-button"></i>
                        </a>
                        <span class="the_time">{{$product->created_at->format('H:i:s')}}</span>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    <nav class="navigation pagination mb-3">
        <div class="nav-links">
           {{ $products->links() }}
        </div>
    </nav>
</div>
<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script>
    new Vue({
        el: '#Product_index',
        methods: {
            Delete(id) {
                Swal.fire({
                    title: 'تأكيد',
                    text: "هل انت متأكد من مسح هاذا المنتج؟",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#d33',
                    cancelButtonColor: '#3085d6',
                    confirmButtonText: 'نعم',
                    cancelButtonText: 'لا'

                }).then(result => {
                    if (result.value) {
                        let url = "{{ route('product.delete', ['product'=> 'value' ]) }}";
                        axios.get(url.replace('value', id))
                            .then(() => {
                                sweetalert('success', 'حسناّ!', 'تم مسح المنتج').then(
                                    () =>
                                    location.reload())
                            })
                    }
                })
            },


        },

    });

</script>
@stop
