@extends('main')

@section('content')

  <div id="myCarousel"class="pimg1 carousel  slide carousel-fade" data-ride="carousel">
    <div class="carousel-inner" role="listbox">
        <div class="item active carousel-1" style="background-image:url(/img/cama.jpg)"></div>
        <div class="item carousel-2" style="background-image:url(/img/agua.jpg)"></div>
        <div class="item carousel-3" style="background-image:url(/img/luz.jpg)"></div>
      </div>
     <div class="ptext">

       <span class="border">Tri-Podes</span>
     </div>

   </div>
    <section class="section section-dark" id="about">
      <h2>About Us</h2>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea molestias debitis ipsam aliquid nulla in nesciunt vel nisi nihil similique saepe, nam om
        nis magnam necessitatibus voluptatum veritatis! Non quae optio fuga provident magni neque similique, qui nihil laborum sapiente minus ex itaque qu
        idem rerum fugiat blanditiis soluta ut, iure voluptas beatae obcaecati. Minus dicta sint, voluptatibus molestias facilis vitae perferendis eaque
        olores aliquam excepturi, voluptatum tempora earum! Odio unde architecto eligendi libero, quaerat nemo cupiditate excepturi provident, deleniti offi
        cia dolor, minus repellendus tempore quae voluptates cum necessitatibus obcaecati. Doloribus a ex quibus
        dam, quia enim velit molestias amet culpa non. Quaerat!</p>
    </section>
    <div class="pimg2">

    </div>
    <section class="section section-light" id="muestra">
      <h2>Muestra</h2>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea molestias debitis ipsam aliquid nulla in nesciunt vel nisi nihil similique saepe, nam om
        nis magnam necessitatibus voluptatum veritatis! Non quae optio fuga provident magni neque similique, qui nihil laborum sapiente minus ex itaque qu
        idem rerum fugiat blanditiis soluta ut, iure voluptas beatae obcaecati. Minus dicta sint, voluptatibus molestias facilis vitae perferendis eaque
        olores aliquam excepturi, voluptatum tempora earum! Odio unde architecto eligendi libero, quaerat nemo cupiditate excepturi provident, deleniti offi
        cia dolor, minus repellendus tempore quae voluptates cum necessitatibus obcaecati. Doloribus a ex quibus
        dam, quia enim velit molestias amet culpa non. Quaerat!</p>
    </section>
    <div class="pimg3">

    </div>
    <section class="section section-dark" id="contact">
      <h2>Contacto</h2>
      <hr>
      <form action="">
        <div class="form-group">
          <label name='email'>Email:</label>
          <input type="text" name="email" value="" class="form-control">
        </div>
        <div class="form-group">
          <label name='encabezado'>Encabezado:</label>
          <input type="text" name="encabezado" value="" class="form-control">
        </div>
        <div class="form-group">
          <label name='mensaje'>Mensaje:</label>
          <textarea name="mensaje" class="form-control"> Escriba aqui su mensaje...</textarea>
        </div>
        <input type="submit" name="" value="Enviar" class="btn btn-success">
      </form>
      <a target="_blank"class="btn btn-social-icon btn-twitter" href="http://twitter.com">
      <span class="fa fa-twitter fa-5x"></span></a>
      <a target="_blank"class="btn btn-social-icon btn-facebook" href="http://facebook.com">
      <span class="fa fa-facebook fa-5x"></span></a>
      <a target="_blank"class="btn btn-social-icon btn-instagram" href="http://instagram.com">
      <span class="fa fa-instagram fa-5x"></span></a>
    </section>
@endsection
