@extends('backend.layouts.app')
@section('title', 'تفاصيل المنتج')
@section('content')
<div class="page_header d-flex align-items-center">
    <div class="container">
        <section>
            <h2>تفاصيل المنتج</h2>
            <div class="breadcrumbs">
                <a href="{{ route('product.index') }}">الرئيسية</a>
                <span>تفاصيل المنتج </span>
            </div>
        </section>
    </div>
</div>
<div class="blog_post" id="Product_details">
    <div class="container-xl">
        <div class="the_post_container">
            <!-- the_post start -->
            <div class="the_post">
                <figure>
                    <img src="{{asset($product->image)}}" alt="Blog title">
                </figure>
                <h2 class="the_title">{{ $product->title }}</h2>
                <div class="post_info">
                    <a href="#" class="date_time">{{$product->created_at}}</a>
                @if($product->is_advertised == 1)
                        <span class="advertised">
                            <img  src="{{ asset('img/icons/star.svg') }}" height="40" width="40">
                            <p>يتم عرض هاذا المنتج في الموقع كإعلان</p>
                            </span>
                        @endif
                </div>
                <div>{!! $product->description !!}</div>

            </div>
            <!-- the_post end -->
            <div class="post_footer">
                @if($product->is_advertised == 0)
                <a class="btn btn-warning" v-on:click="advertise({{ $product->id }})" title="عرض المنتج كأعلان">
                    <i class="flaticons-019-magic-wand mr-3"></i>
                    عرض المنتج كإعلان
                </a>
                @endif
            </div>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script>
    new Vue({
        el: '#Product_details',
       methods:{
           advertise(id){
                Swal.fire({
                    title: 'تأكيد ',
                    text: " هل انت متأكد من عرض هذا المنتج كإعلان؟ سيتم مسح الاعلان السابق",
                    icon: 'info',
                    showCancelButton: true,
                    confirmButtonColor: '#ffe817',
                    cancelButtonColor: '#3085d6',
                    confirmButtonText: 'نعم',
                    cancelButtonText: 'لا'

                }).then(result => {
                    if (result.value) {
                        let url = "{{ route('product.advertise', ['product'=> 'value' ]) }}";
                        axios.post(url.replace('value', id))
                            .then(() => {
                                sweetalert('success', 'حسناً', 'تم عرض المنتج كإعلان!')
                            }).catch((error)=> {
                                console.log(error)
                            })
                    }
                })
           }
       }
    });
</script>
@stop
