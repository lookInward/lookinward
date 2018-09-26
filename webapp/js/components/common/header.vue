<template>
  <header>
    <div class="logo-container">

    </div>

    <div class="log-reg">
      <span data-toggle="modal" data-target=".bs-example-modal-sm">登录</span>
      <span data-toggle="modal" data-target=".bs-example-modal-sm">注册</span>
    </div>

  </header>
</template>
<script>
export default {
  data() {
    return {
      dialogLogVisible: false
    };
  },
  methods: {}
};
</script>
<style scoped lang="scss">
header {
  overflow: auto;
  padding: 0 70px;
  background: #fff;
  .logo-container {
    float: left;
    width: 200px;
    height: 50px;
    background: {
      image: url('/static/images/logo.png');
      size: contain;
      repeat: no-repeat;
    }
  }
  .log-reg {
    float: right;
    span {
      padding: 16px;
      line-height: 50px;
      font-size: 16px;
      color: #3a3a3a;
      cursor: pointer;
      user-select: none;
      &:nth-child(2) {
        color: #fff;
        background: #08bf91;
      }
    }
  }
}
</style>

