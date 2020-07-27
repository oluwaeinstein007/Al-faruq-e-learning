
<template>
<div><h1>Teacher-Admin Login Page</h1>
<h2>For Teachers-Admin only!</h2>
<div class="container" :class="{'sign-up-active': signup}">
  <h2>For Teachers-Admin only!</h2>
  <div class="overlay-container">
    <div class="overlay">
      <div class="overlay-right">
        <h2>Hello Sir/Ma'am!</h2>
         <p>Please login with the Admin details, if you don't know/forgot the password please contact the principal for the password</p>
          <router-link to="/about"><button class="invert" id="signUp" @click="signIn = !signIn">Go to About</button></router-link>
          
      </div>
    </div>
  </div>

     <form class="sign-in" action="#">
       <h2>Welcome Sir|Ma</h2>
     <p></p>
     <div> Use Admin Account to Login</div>
     <input type="text" placeholder="Admin Username">
       <input type="email" placeholder="Email: yoururl@yourhost.com">
        <input type="password" placeholder="Enter Admin password">
       <a href="../AdminProfile.vue"><button>Login</button></a>
     </form>
     </div>
</div>
</template>

<style lang="scss">
.container{
  position: relative;
  width: 1050px;
  height: 480px;
  border-radius: 10px;
  overflow: hidden;
  box-shadow: 0 15px 30px rgba(0,0,0,.2),
              0 10px 10px rgba(0,0,0,.2);
  background: linear-gradient(to bottom, #efefef, #ccc);

  .overlay-container{
    position: absolute;
    top: 0;
    left: 50%;
    width: 50%;
    height: 100%;
    overflow: hidden;
    transition: transform .5s ease-in-out;
    z-index: 100;
  }

  .overlay{
    position: relative;
    left: -100%;
    height: 100%;
    width: 200%;
    background: linear-gradient(to bottom right, #7FD825, #009345);
    color: #fff;
    transform: transflex(0);
    transition: transform .5s ease-in-out;
  }

  @mixin overlays($property){
  position: absolute;
    top: 0;
    display: flex;
    align-items: center;
    justify-content: space-around;
    flex-direction: column;
    padding: 70px 40px;
    width: calc(50% - 8px);
    height:calc(100% - 140px);
    text-align: center;
    transform: translateX($property);
    transition: transform .5s ease-in-out;
  }
  .overlay-left{
     @include overlays(-20%);

    }

    .overlay-right{
    @include overlays(0);
    right: 0;
    }

    form{
    position: absolute;
    top: 0;
    display: flex;
    align-items: center;
    justify-content: space-around;
    flex-direction: column;
    padding: 90px 60px;
    width: calc(50% - 120px);
    height: calc(100% - 180px);
    text-align: linear-gradient(to bottom, #efefef, #ccc);
    transition: all .5s;
  }

  }


  form{
    position: absolute;
    top: 0;
    display: flex;
    align-items: center;
    justify-content: space-around;
    flex-direction: column;
    padding: 90px 60px;
    width: calc(50% - 120px);
    height: calc(100% - 180px);
    text-align: center;
    background: linear-gradient(to bottom, #efefef, #ccc);
    transition: all .5s ease-in-out;

    div{
      font-size: 1rem;
    }

    input{
      background-color: #eee;
      background: none;
      padding: 8px 15px;
      margin: 6px 0;
      width: calc(100% - 30%);
      border-radius: 15px;
      border-bottom: 1px solid #ddd;
      box-shadow: insert 0 1px 2px rgba(0,0,0,.4),
                          0 -1px 1px #fff,
                          0 1px 0 #fff;
      overflow: hidden;

      &:focus{
        outline: none;
        background-color: #fff;
      }
    }
  }
  button{
  border-radius: 20px;
  border: 1px solid #009345;
  background-color: #009345;
  color: #fff;
  font-size: 1rem;
  font-weight: bold;
  padding: 10px 40px;
  letter-spacing: 1px;
  text-transform: uppercase;
  transition: transform .1s ease-in;

  &:active{
    transform: scale(.9);
  }

  &:focus{
    outline: none;
  }
}

</style>