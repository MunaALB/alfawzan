@extends('backend.layouts.app')
@section('title', 'تعديل المنتج')
@section('content')
<div class="page_header d-flex align-items-center">
    <div class="container">
        <section>
            <h2>تعديل منتج</h2>
        </section>
    </div>
</div>
<div class="create-product-section" id="edit_product">
    <div class="container">
        <div class="row justify-content-center">
            <div class="section-header text-left col-xl-12">
                <h5> تعديل المنتج {{ $product->title }}</h5>
            </div>
        </div>
        <div class="alert alert-danger mt-5" v-if="errors.length">
            <ul>
                <li v-for="error in errors">@{{ error }}</li>
            </ul>
        </div>
        <div class="row justify-content-between">
            <div class="col-xl-12">
                <form class="create-form" id="create_form">
                    <div class="inputs ">
                        <input hidden id="id" value="{{ $product->id }}">
                        <input id="title" type="text" value="{{ $product->title }}" v-model="title">
                        <select v-model="category" id="category">
                            <option selected disabled value="{{ $product->category_id }}"> تصنيف المنتج الحالي: {{$product->category->title}}</option>
                            @foreach($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->title }}</option>
                            @endforeach
                        </select>
                        <div class=' file-input'>
                            <input type='file' name="image" id="image">
                            <span class='label' data-js-label>{{$product->image}}</span>
                            <span class='button'>اختر</span>
                        </div>

                    </div>
                    <div class="text-area text-center">
                        <textarea class="mb-5" id="summernote" name="description" placeholder="تفاصيل المنتج او الوصف">
                            {{ $product->description }}
                        </textarea>
                        <a @click="editProduct()" class="theme-btn">
                            تعديل <i class="icofont-plus"></i>
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script>
    new Vue({
        el: '#edit_product',
        data: {
            id: '',
            title: '',
            category: '',
            image: '',
            description: '',
            errors: [],
        },
        created() {
            this.title = document.getElementById('title').value
            this.category = document.getElementById('category').value
        },
        methods: {

            editProduct() {

                this.description = document.getElementsByClassName('note-editable')[0].innerHTML
                this.image = document.getElementById('image').files[0];

                this.id = document.getElementById('id').value
                let data = new FormData();
                data.append('title', this.title);
                data.append('description', this.description);
                data.append('image', this.image);
                data.append('category', this.category);

                let settings = {
                    headers: {
                        "content-type": "multipart/form-data"
                    }
                };

                let url = "{{ route('product.update', ['product'=> 'value' ]) }}"
                axios
                    .post(url.replace('value', this.id), data, settings)
                    .then(response => {
                        if (response.data.status == "error") {
                            this.errors = response.data.error;
                            console.log(this.errors)
                            return;
                        }
                        sweetalert('success', 'تم', 'تم تعديل المنتج بنجاح')
                            .then(() => window.location = "{{ route('product.index') }}")
                    })
            },

        }
    });

</script>
@stop
