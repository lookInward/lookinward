<template>
  <div>
    <div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
      <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
          <button type="button" class="close-modal" data-dismiss="modal">
            <span>×</span>
          </button>
          <div class="modal-body">
            <ul class="select-btn">
              <li role="presentation">
                <a href="#signin-form" class="active" role="tab" data-toggle="tab">登录</a>
              </li>
              <li role="presentation">
                <a href="#signup-form" role="tab" data-toggle="tab">注册</a>
              </li>
            </ul>

            <div class="tab-content">
              <div role="tabpanel" class="tab-pane active" id="signin-form">

                <div class="input-container">
                  <div class="input-icon">
                    <i class="glyphicon glyphicon-envelope"></i>
                  </div>
                  <input @focus="buleInput" placeholder="   请输入邮箱" type="email" name="email">
                </div>

                <div class="input-container">
                  <div class="input-icon">
                    <i class="glyphicon glyphicon-lock"></i>
                  </div>
                  <input @focus="buleInput" placeholder="  请输入密码" type="password" name="password">
                </div>

                <div class="remember-login">
                  <input type="checkbox" name="remember" value="y"> 下次自动登录
                </div>

                <div class="btn-container">
                  <button class="btn re-btn-primary">以会员身份进入网站</button>
                </div>
              </div>

              <div role="tabpanel" class="tab-pane" id="signup-form">

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
</script>
<style scoped lang="scss">
.modal {
  .modal-dialog {
    .modal-content {
      position: relative;
      border-radius: 4px;
      padding-bottom: 12px;
      box-shadow: 0 0px 10px rgba(0, 0, 0, 0.3);
      .close-modal {
        position: absolute;
        top: 5px;
        right: 5px;
        background: rgba(0, 0, 0, 0);
        border: 0;
        font-size: 20px;
        color: #ccc;
        font-weight: 900;
        cursor: pointer;
        outline: none;
      }
      .modal-body {
        margin-top: 28px;
        padding:1px 20px 20px;
        .select-btn {
          margin-bottom: 66px;
          padding: 0;
          li {
            float: left;
            width: 50%;
            text-align: center;
            a {
              display: inline-block;
              width: 100%;
              padding: 8px;
              font-size: 18px;
              font-weight: 500;
              color: #565a61;
              border-bottom: 1px solid #eee;
              &:hover {
                border-bottom: 1px solid rgb(224, 143, 66);
              }
            }
            a.active{
              border-bottom: 1px solid rgb(224, 143, 66);
            }
          }
        }
        .input-container {
          display: table;
          width: 100%;
          height: 34px;
          margin: 15px 0;
          border: 1px solid #ccc;
          border-radius: 4px 0 0 4px;
          .input-icon {
            display: table-cell;
            background: #eee;
            border-radius: 4px 0 0 4px;
            width: 46px;
            border-right: 1px solid #ccc;
            text-align: center;
            vertical-align: middle;
            i {
              color: #555;
              font-size: 13px;
            }
          }
          input {
            width: 100%;
            height: 100%;
            box-shadow: 0 0 9px -1px #ccc;
            border: none;
            outline: none;
            &:focus {
              box-shadow: 0 0 9px -2px blue;
            }
          }
        }
        .remember-login {
          font-size: 12px;
        }

        .btn-container {
          .btn {
            width: 100%;
            margin-top: 15px;
          }
        }
      }
    }
  }
}
</style>


