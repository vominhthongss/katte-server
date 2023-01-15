<div class="col-md-6">
    <div class="input-group">
        <div class="input-group-btn">
            <button type="button"
                    class="btn btn-default dropdown-toggle btn-active-field"
                    data-toggle="dropdown" aria-expanded="false">
                Tìm <span class="caret"></span>
            </button>
            <ul class="dropdown-menu dropdown-menu-right" role="menu">

                <li><a href="/admin/sanpham/timtheoloai/Áo thun nữ"
                        class="select-field" data-field="fullname">Tìm áo thun nữ</a>
                 </li>
                <li><a href="/admin/sanpham/timtheoloai/Áo thun nam"
                       class="select-field" data-field="fullname">Tìm áo thun nam</a>
                </li>
                <li><a href="/admin/sanpham/timtheoloai/Quần nữ"
                    class="select-field" data-field="fullname">Tìm quần nữ</a>
                </li>
                <li><a href="/admin/sanpham/timtheoloai/Quần nam"
                    class="select-field" data-field="fullname">Tìm quần nam</a>
                </li>
            </ul>
        </div>


        <input type="text" class="form-control" name="search_value" value="" id="search_value" placeholder="Nhập id sản phẩm hoặc tên sản phẩm">
        <span class="input-group-btn">

        <button id="btn-search" type="button" class="btn btn-primary" onclick="timKiem()">Tìm kiếm</button>
        <script>

            var input = document.getElementById("search_value");
            input.addEventListener("keyup", function(event) {
                if (event.keyCode === 13) {
                    event.preventDefault();
                    document.getElementById("btn-search").click();
                }
            });
            function timKiem(){
                var keyWord=document.getElementById("search_value").value;
                window.location="/admin/sanpham/tim/"+keyWord;


            }
        </script>

    </span>
        <input type="hidden" name="search_field" value="all">
    </div>
</div>
