<div class="search-wrapper">
            <div class="container container--add">
                <form id='search-form' method='get' class="search">
                    <input type="text" class="search__field" placeholder="Search">
                    <select name="sorting_item" id="search-sort" class="search__sort" tabindex="0">
                        <option value="1" selected='selected'>Theo tiêu đề</option>
                        <option value="2">Theo năm</option>
                        <option value="3">Theo nhà sản xuất</option>
                    </select>
                    <button type='submit' class="btn btn-md btn--danger search__button">Tìm Kiếm</button>
                </form>
            </div>
        </div>
<form id="login-form" class="login" method='get' novalidate=''>
                    <p class="login__title">đăng ký <br></p>

                    
                    <div class="field-wrap">
                    <input type='text' placeholder='Name' name='user-name' class="login__input">
                    <input type='email' placeholder='Email' name='user-email' class="login__input">
                    <input type='password' placeholder='Password' name='user-password' class="login__input">
                    <input type='text' placeholder='Số điện thoại' name='user-sdt' class="login__input" maxlength="10" id="sdt">

                    <!-- <input type='checkbox' id='#informed' class='login__check styled'>
                    <label for='#informed' class='login__check-info'>remember me</label> -->
                     </div>
                    
                    <div class="login__control">
                        <button type='submit' class=" btn btn-md btn--warning btn--wider">Đăng Ký</button>
                        <!-- <a href="#" class="login__tracker form__tracker">Forgot password?</a> -->
                    </div>
                </form>