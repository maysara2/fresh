<div id="confirmModal" class="modal fade" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 style="font-family: 'Cairo', sans-serif;" class="modal-title"
                    id="">
حذف المنشور
                </h5>
                <button type="button" class="close" data-dismiss="modal"
                        aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <form action="{{route('admin.posts.delete')}}" id="delete" method="post">
                    @csrf
                    <h4>هل انت متاكد من عملية حذف المنشور</h4>
                    <input type="hidden">
                    <input id="Delete_id" type="hidden" name="id" class="form-control">
                    <input id="Name_Delete" type="text" name="Name_Delete" class="form-control" disabled>


                    <div class="modal-footer">
                        <button type="submit"  class="btn btn-danger submit_delete"><span><i
                                    class="fa fa-paper-plane"
                                    aria-hidden="true"></i></span>
                            تاكيد
                        </button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal"><i
                                class="fa fa-window-close" aria-hidden="true">
                        الغاء
                            </i>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
