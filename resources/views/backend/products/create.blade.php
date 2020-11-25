@extends('backend.layouts.app')
@section('title', 'اضافة منتج')
@section('content')
<div class="page_header d-flex align-items-center">
    <div class="container">
        <section>
            <h2>اضافة منتج جديد</h2>
        </section>
    </div>
</div>
<div class="create-product-section" id="create_product">
    <div class="container">
        <div class="row justify-content-center">
            <div class="section-header text-left col-xl-12">
                <h5>قم بتعبئة الحقول لإضافة منتج جديد</h5>

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
                        <input type="text" placeholder="العنوان" v-model="title">
                        <select v-model="category" id="category">
                            <option selected disabled> اختر التصنيف</option>
                            @foreach($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->title }}</option>
                            @endforeach
                        </select>
                        <div class='file-input'>
                            <input type='file' name="image" id="image">
                            <span class='label' data-js-label>لم يتم اختيار ملف بعد</span>
                            <span class='button'>اختر</span>
                        </div>
                    </div>
                    <div class="text-area text-center">
                        <textarea class="mb-5" id="summernote" placeholder="تفاصيل المنتج او الوصف"></textarea>
                        <a @click="createProduct()" class="submit-btn theme-btn">
                            اضافة <i class="icofont-plus"></i>
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
        el: '#create_product',
        data: {
            title: '',
            category: '',
            image: '',
            description: '',
            errors: [],
        },

        methods: {

            createProduct() {
                this.image = document.getElementById('image').files[0]
                this.description = document.getElementsByClassName('note-editable')[0].innerHTML
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

                axios
                    .post("{{ route('product.store')}}", data, settings)
                    .then(response => {
                        if (response.data.status == "error") {
                            this.errors = response.data.error;
                            return;
                        }
                        sweetalert('success', 'تم', 'تم اضافة المنتج بنجاح')
                            .then(() => window.location = "{{ route('product.index') }}")
                    })
            }
        }
    });

</script>
@stop
