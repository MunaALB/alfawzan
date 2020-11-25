<div id="apply">
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">قدم على وظيفة</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                   <div class="form-group">
                        <label for="recipient-name" class="col-form-label">الاسم</label>
                        <input type="text" class="form-control" v-model="applicant_name">
                    </div>
                    <div class="form-group">
                        <label for="recipient-email" class="col-form-label">البريد الالكتروني:</label>
                        <input type="email" class="form-control" v-model="applicant_email">
                    </div>

                    <div class='file-input'>
                        <input type='file' name="cv" id="cv" accept="application/msword, application/vnd.ms-excel, application/vnd.ms-powerpoint,
                        text/plain, application/pdf">
                        <span class='label' data-js-label>لم يتم اختيار ملف بعد</span>
                        <span class='button'>اختر</span>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">اغلق</button>
                <button @click="applyToJob()" class="btn btn-primary" >قدم الان</button>
            </div>
        </div>
    </div>
</div>
</div>

