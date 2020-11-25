@extends('backend.layouts.app')
@section('title', 'اضافة اعلان')
@section('content')
<div class="page_header d-flex align-items-center">
    <div class="container">
        <section>
            <h2>اضافة اعلان</h2>
        </section>
    </div>
</div>
<div class="create-product-section" id="create_ad">
    <div class="container">
        <div class="row justify-content-center">
            <div class="section-header text-left col-xl-12">
                <h5>اضف صورة الاعلان لكي يتم عرضها في الموقع الالكتروني</h5>
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
                        <div class='file-input'>
                            <input type='file' name="image" id="image">
                            <span class='label' data-js-label>لم يتم اختيار ملف بعد</span>
                            <span class='button'>اختر</span>
                        </div>
                        <div class="text-area text-center">
                        <a @click="createAD()"  class="submit-btn theme-btn">
                            اضافة <i class="icofont-plus"></i>
                        </a>
                        </div>
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
        el: '#create_ad',
        data: {
            image: '',
            errors: [],
        },

        methods: {

            createAD() {
                this.image = document.getElementById('image').files[0]

                let data = new FormData();
                data.append('image', this.image);
                let settings = {
                    headers: {
                        "content-type": "multipart/form-data"
                    }
                };

                axios
                    .post("{{ route('advertisement.store')}}", data, settings)
                    .then(response => {
                        if (response.data.status == "error") {
                            this.errors = response.data.error;
                            return;
                        }
                        sweetalert('success', 'تم', 'تم اضافة الاعلان بنجاح')

                    })
            }
        }
    });

</script>
@stop
