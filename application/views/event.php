<!DOCTYPE html>
<html lang="en">
<head>
  <title>REGISTRASI</title>
  <link rel="stylesheet" href="login.css">
  </head>
  <style media="screen">
  body {
    background-image: url(<?=base_url()?>assets/img/maldives.jpg);
    background-size: 2500px;
  }
  html,body,p,h1,h2 {
  padding: 0px;
  margin: 0px;
  box-sizing: border-box;
}
.wraper{
  display: grid;
  grid-template-columns: 2fr 1fr;
  min-height: 100vh;
}
body{
  font-size: 22px;
}
form p{
  margin: 30px;
}
.form-input{
  border: 0;
  border: 2px solid #59ABE3;
  color: #1cadaf;
  padding-left: 10px;
  border-radius: 10px;
  font-size: 17px;
  height: 45px;
  width: 200px;
  transition: width 0.5s;
  box-sizing: border-box;
  color: #eaea;

}
.form{
  padding: 5px 5px 5px 5px;
  background-color: pink;
  color: black;
  margin: 0px;
  padding: 0px;
}
h2{

}
#judul{
  text-align: center;
  border-color: red;
}
.BC{
  background-color: #2C3E50;
  width: 100%;
  height: 100px;
  box-sizing: border-box;
  color: white;
}
.BC #judul{
  padding: 10px ;
  text-align: center;
}

input[type=text]{
  margin:5px;
}
*,focus{
 outline: none;
}
.form-input:focus{
  border: 2px solid #59ABE3;
  background-color:;
  color: black;
  box-shadow: 1px 1px 1px 1px #59ABE3;
  width: 70%;
  border-radius: 10px;

}
.input-focus::-webkit-input-placeholder {
  color: black;

}
input::placeholder {
  color:blue;
  font-size: 17px;
}
.pilih{
  padding: 2px;
}
textarea{
  border: 2px solid #59ABE3;
}
.bawah{

}
button{
  margin-left: 150px;
  margin-right: auto;
  width: 50%;
  font-size: 18px;

}
form label{
  padding: 20px;
}
input[type=checkbox] + label{
  display: inline-block;
  margin: 0.2em;
  cursor: pointer;
  padding: 0.2em;
}
input[type=checkbox]{
  display: none;
}
input[type=checkbox] + label:before{
  content: "\2714";
  border: 0.1em solid #59ABE3;
  border-radius: 0.2em;
  display: inline-block;
  width: 1em;
  height: 1em;
  padding-left: 0.2em;
  padding-bottom: 0.3em;
  color: transparent;
  vertical-align: bottom;
  transition: .2s;
}
input[type=checkbox] + label:active:before{
  transform: scale(10);
}
input[type=checkbox]:checked + label:before{
  background-color: #59ABE3;
  border-color: #59ABE3;
  color: #fff;
}

input[type=checkbox] label{
  margin: 250px
}
#tk{
  color: red;
}
/*Class Hero*/
.hero{
  background-image: url(img/buali.jpg);
  background-repeat: no-repeat;
  background-size:100% 100%;
  background-position: center;

}
.hero .teks{
  width: 397px;
  margin-left: 275px;
  margin-top:10px;
  box-sizing: border-box;
  text-align: center;
  font-size: 60px;
  font-family: sans-serif;
  color: #F2F1EF;
  box-sizing: content-box;
  border-radius: 15px;

  opacity: 0.75px;
}
/*Radio*/
input[type=radio] + label{
  display: inline-block;
  margin: 0.2em;
  cursor: pointer;
  padding: 0.2em;
}
input[type=radio]{
  display: none;
}
input[type=radio] + label:before{
  content: "\2714";
  border: 0.1em solid #59ABE3;
  border-radius: 0.2em;
  display: inline-block;
  width: 1em;
  height: 1em;
  padding-left: 0.2em;
  padding-bottom: 0.3em;
  color: transparent;
  vertical-align: bottom;
  transition: .2s;
}
input[type=radio] + label:active:before{
  transform: scale(0);
}
input[type=radio]:checked + label:before{
  background-color: #59ABE3;
  border-color: #59ABE3;
  color: #fff;
}

input[type=radio] label{
  margin: 250px
}
/*Select*/
.sel{
  -webkit-appearance:none;
  appearance:none;

  display: block;
  margin: 30px 0;
  padding: 10px 50px 10px 10px;
  background: url('select.png')no-repeat 95% center;
  background-color:#fff;
  color: #6C7A89;
  border-radius: 4px;
  border: 2px solid #59ABE3;
  width: 280px;
  font-size: 20px;
}

button{
  background: #fff;
  padding: 15px;
  color: #969696;
  font-size: 20px;
  letter-spacing: 0.1em;
  border-radius: 4px;
  border: 2px solid #2C3E50;
  box-shadow: 1px 3px 5px rgba(0,0,0,0.5);
  width: 280px;
  margin-left: 80px;
  transition: all 0.75s;
}
button:hover{
  background-color: #2C3E50;
  color: #fff;
}

  </style>
<body>
  <div class="wraper">
    <div class="hero">
        <div class="teks">
        </div>

    </div>
    <div class="form">

      <div class="BC">
      <span id="judul">
      <h2> Please write the identity correctly </h2>
      </span>
    </div>
      <form>
      <b>
      <p>
        <label for="nama" >Full name<span id="tk">*</span> </label><br>
        <input type="text" name="" value="" id="nama" class="form-input" placeholder="write your name">
      </p>
      <p>
        <label for="">Gander<span id="tk">*</span></label><br>
        <input type="radio" name="gander" value="L" id="L" class="radio-btn" >
        <label for="L"class="pilih">     Male</label><br>
        <input type="radio" name="gander" value="L" id="F" class="radio-btn">
        <label for="F"class="pilih">     Female</label>
      </p>
      <P>
        <label for="e">Email<span id="tk">*</span></label><br>
        <input type="email" name="" value="" id="e" class="form-input" placeholder="write your Email">
      </P>
      <P>
        <label for="n">Number Phone<span id="tk">*</span></label><br>
        <input type="text" name="" value="" id="n" class="form-input" placeholder="write your number">
      </P>
      <p>
        <label for="">Address<span id="tk">*</span></label><br>
        <textarea name="name" rows="8" cols="40"></textarea>
      </p>
      <p>
        <label for="" class="bawah">Payment Method<span id="tk">*</span></label>
        <select class="sel" name="">
          <option value="">Choose</option>
          <option value="">BRI</option>
          <option value="">BCA</option>
          <option value="">PayPal</option>
        </select>
      </p>
      <p class="label">
        <label for="" class="bawah">Lessons selected :</label><br>
        <br><input type="checkbox" name="Materi" value="RajaAmpat" id="c1">  <label for="c1"class="pilih">RajaAmpat</label>
        <br><input type="checkbox" name="Materi" value="Lombok" id="c2"> <label for="c2"class="pilih">Lombok</label>
        <br><input type="checkbox" name="Materi" value="Bali"  id="c3">  <label for="c3"class="pilih">Bali</label>
      </p>
      <button type="button is-trusted is-center load-more" name="button" class="bawah">Submint</button>
      <br>
        <br>
          <br>
    </form>
  </div>
</div>
</body>
</html>
