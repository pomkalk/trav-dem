<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Travel-Up</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('semantic/semantic.css') }}">
    <link rel="stylesheet" href="{{ asset('slick/slick.css') }}">
	<script src="https://code.jquery.com/jquery-2.2.2.js"></script>
	<script type="text/javascript" src="{{ asset('scripts/jquery.color.js') }}"></script>
    <script type="text/javascript" src="{{ asset('slick/slick.min.js') }}"></script>

    <!-- TEMP CSS will be moved to separated file -->
    <style type="text/css">
    	body{
    		background-image: url('{{url('img/bg_repeat.jpg')}}');
    	}
		.header{
			background-color: rgba(10,30,90, 0.5);
			height: 35vw;
			min-height: 250px;
			max-height: 500px;
			overflow: hidden;
			padding: 0;
		}

		.header .item{
			width: 100%;
			height: 35vw;
			min-height: 250px;
			max-height: 500px;
			margin: 0;
			background-size: 100%;
			background-repeat: none;
			background-position: center center;
		}

		.navbar{
			width: 100%;
			height: 45px;
			position: fixed;
			top: 0px;
			background-color: rgba(255,255,255,0.3);
			box-shadow: 0px 0px 5px 3px rgba(0,0,0,0.25);
		}

		.navbar img.item{
			height: 45px;
		}

		.footer{
			height: 90px;
			background-color: white;
			margin-top: 35px;
		}

    </style>
</head>
<body>

<div class="header">
	@foreach($headerImages as $image)
	<div class="item" style="background-image: url({{ url('images/header') }}/{{ $image }})">
		
	</div>
	@endforeach
</div>    

<div class="navbar">
	<div class="ui container">
		<div class="ui secondary menu">
			<!-- <div class="item"> -->
				<img src="{{asset('img/logo.png')}}" alt="" class="item">
			<!-- </div> -->
			<a class="right item">Войти</a>
		</div>
	</div>
</div>


<div class="content">
	<div class="ui container">
		Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis earum temporibus illum voluptatem, qui quas, cupiditate consequatur vero. Earum, recusandae esse quod temporibus odit consequuntur, perferendis libero distinctio similique non, reprehenderit deleniti quo autem, ipsa laudantium officia laboriosam culpa provident qui maxime optio. Eveniet debitis quisquam pariatur mollitia modi! Asperiores, laudantium perferendis esse, debitis omnis itaque distinctio aspernatur? Perferendis error, est molestias. Tenetur voluptatem illo consequatur nesciunt! Ullam non repellendus quis, voluptas pariatur ducimus. Nisi animi dolorum dolorem quisquam aperiam voluptatum quis itaque dolore saepe repudiandae laboriosam rerum, minus veritatis. Quia aut obcaecati dolores eveniet fugiat voluptates sint ab nobis tempora id perspiciatis neque, repellat earum dignissimos corporis cumque. Repellendus id enim inventore neque maxime, rem vitae assumenda, cupiditate eligendi dolores suscipit nostrum sint itaque tenetur, architecto quasi aliquid porro, ipsam voluptatem a aliquam iusto non. Quo reprehenderit ipsa tempora repellat praesentium. Veniam error quisquam dignissimos sit qui similique, consectetur optio facere vero. Possimus dignissimos perferendis alias commodi dolores nesciunt reprehenderit placeat incidunt quisquam fugiat dicta rem dolore officiis, laboriosam eaque nam sit aspernatur delectus! Tempore aliquid omnis, sed cupiditate ad, perspiciatis sunt pariatur obcaecati ea sint excepturi facere quidem aperiam ducimus corporis tenetur dolorem at maiores, harum porro possimus ut natus neque perferendis? Consequatur quos saepe beatae, dignissimos voluptas sed! Quae rem, esse dolorem laudantium nemo earum architecto dignissimos, ex, voluptates atque dolorum illum nihil nobis tempore? Illum error enim dicta vel alias voluptates nemo, doloribus quia quos laborum officiis dolorum excepturi unde, tempora repellendus amet velit culpa qui, debitis et quidem. Minus architecto quod ipsa tempora dicta iusto accusamus asperiores beatae soluta laborum quidem sunt dolores molestias, nihil, deserunt aut tenetur aliquid sed ex laboriosam enim, odit ratione nesciunt rem accusantium! Optio provident debitis saepe ducimus vitae explicabo illum consequatur laborum, qui hic vel aut incidunt distinctio nostrum est officia sed deserunt aliquid, labore. Quod sequi voluptatum, eaque consequatur sint eligendi quas excepturi, provident accusantium similique, voluptate ea. Asperiores quasi distinctio ut, fugiat dolor blanditiis perspiciatis esse repellat itaque molestiae nisi fugit, dolorum qui. Perferendis ab nostrum expedita neque accusamus voluptatum doloribus possimus, ex! Quis, unde ut temporibus veritatis soluta eveniet odit repellat neque est nam aliquid culpa ullam doloribus maiores ducimus architecto dolorum aut quisquam beatae, illum reiciendis et fugit tempore hic. Minima pariatur eligendi, amet dolores voluptatem, temporibus autem, quis nisi accusantium, ipsam consequatur sunt. Quod qui, natus, debitis ab aperiam dolore, id expedita facere ducimus, velit temporibus dolor! Accusamus quis vitae quia, sint, blanditiis nobis rerum vel neque, dolor corporis temporibus nemo eius explicabo sequi. Nesciunt numquam error velit doloremque doloribus debitis quasi architecto repellat in voluptatibus officia autem amet omnis tenetur, dolorum molestias consequuntur recusandae minus repellendus, illo cumque, accusantium? Sapiente laboriosam aut nesciunt nostrum numquam recusandae natus praesentium atque autem consequatur possimus ipsam quo at, ratione labore, nobis nemo porro repellendus non inventore! Est enim mollitia illo ratione porro alias voluptatibus sit sunt esse nesciunt labore, fugiat obcaecati iure accusamus nostrum, consequuntur non veniam eius! Cum dolore temporibus vero dolorum sequi labore velit maxime, voluptatum error quia dolorem excepturi eligendi alias autem sed fuga a. Autem dolorem harum, deserunt voluptate quibusdam maiores minima commodi eos fugit veniam eum ut architecto sint eligendi aliquam accusamus. Repudiandae eum numquam aliquam fugiat cumque voluptatum quasi. Deleniti tenetur ipsa, animi optio laborum doloribus ab reprehenderit eum excepturi provident, culpa quisquam placeat voluptatum non pariatur molestiae in temporibus ex ducimus asperiores dicta ullam. Blanditiis obcaecati quidem est, doloribus necessitatibus, laudantium adipisci consequuntur, cupiditate distinctio aut laboriosam assumenda porro cum vel voluptatibus praesentium vero maxime sapiente architecto aliquam eius dolorum nisi. Sequi, accusantium voluptate quae est. Deserunt delectus consequuntur libero quia magnam voluptatem sed adipisci nihil neque vitae quod iste aspernatur recusandae, maiores distinctio magni pariatur, omnis modi harum commodi accusamus ab, suscipit impedit. Et repudiandae ducimus, obcaecati cupiditate commodi itaque illo similique est fugiat, ea corporis libero ipsam qui, unde voluptate, nam consequatur debitis numquam adipisci eum enim animi. Assumenda esse quod inventore, repellendus adipisci hic harum eaque cumque nisi quibusdam tenetur corporis eligendi pariatur unde voluptas, laboriosam facilis, optio neque sed fuga nemo? Quos quasi voluptates harum quia fugiat totam itaque ut nihil doloribus facere natus excepturi veniam tenetur similique, tempora beatae, reprehenderit debitis cum nostrum et corporis provident! Tempore qui odio esse eaque, expedita voluptates quae doloribus alias officia laborum a eveniet magni, necessitatibus facere! Atque, a, aperiam. Rerum optio a, quis commodi quo! Illum deserunt quidem libero! Aliquid placeat laboriosam molestiae veritatis dolores quam in, officia atque eos ad, id ex a modi, harum sed magni ratione voluptas distinctio mollitia alias! Dolorem recusandae ducimus omnis quos, unde aperiam modi. Blanditiis et culpa voluptatum delectus officia ab magnam possimus hic, eos eaque dolore vel aperiam nesciunt consequatur omnis amet explicabo optio debitis, at, esse ullam molestiae autem numquam quod? Quibusdam illo enim unde suscipit distinctio tempore qui eaque dignissimos, assumenda porro, vel doloremque amet, deleniti mollitia cupiditate est quia quaerat culpa repellat recusandae laboriosam numquam consectetur. A culpa quibusdam nobis provident, officiis ea laudantium. Culpa in eum corrupti maxime voluptas nostrum, rem tempora quasi nobis voluptates soluta minima non, quo impedit, sequi. Minima ea tempora corporis placeat, qui illo reiciendis amet quaerat cum, iste suscipit inventore fugit aut dicta enim ducimus quidem esse ullam sapiente reprehenderit totam, odio? Ipsam magni sit necessitatibus hic, in repudiandae sint placeat ab fugiat nostrum ex voluptates dolorem neque, temporibus atque! Voluptatum, perferendis. Velit, voluptatem ratione quia quis consequuntur inventore doloribus aliquid perspiciatis. Iusto tempore quam, vero quis est debitis soluta enim quaerat voluptate perferendis quasi necessitatibus, consectetur harum, dicta quia ut neque dolor aut maiores ullam cum? Tenetur modi accusamus, delectus autem ad, rem, dolore libero perspiciatis consequuntur id harum maxime et? Aliquam voluptas, minus atque sit laborum dolorum quisquam totam, fuga asperiores officiis vel facilis libero doloremque velit reiciendis modi sed. Possimus doloribus magnam, commodi doloremque quod iusto facere cupiditate repellendus quam maiores minima iure animi voluptatibus, impedit dolor, libero facilis aperiam quibusdam alias eveniet inventore labore. Veritatis magnam alias, commodi hic eaque? Eveniet quo, eos aspernatur excepturi minima ex hic, commodi blanditiis nobis reiciendis ab, nihil necessitatibus dolores? Cum debitis unde pariatur eos fugiat dignissimos dolorum ullam modi iste, nam corrupti suscipit aperiam impedit consequatur quam accusamus aliquid, veritatis rerum nobis inventore. Sit commodi fugit placeat deleniti itaque, est quidem quasi fuga cupiditate quis. Adipisci atque cumque a, sapiente quisquam nobis officia necessitatibus nihil laudantium eligendi reprehenderit maiores tempora maxime veritatis excepturi quasi natus! Saepe cupiditate vero officiis temporibus numquam autem sit nulla, recusandae asperiores unde suscipit, dolore ad tenetur beatae nihil sapiente dolorum, pariatur qui et dolorem similique? Fugit ut magnam eligendi quibusdam voluptatum illum veniam a placeat, ipsam aspernatur nostrum natus id, consequuntur nihil velit cupiditate saepe consectetur quod commodi dicta ipsa tempore vero ratione voluptas quis? Aliquid modi mollitia, obcaecati, nesciunt saepe id quae dolores error praesentium molestiae quidem dicta cumque. Similique commodi, voluptate. Placeat maxime modi dolorem quam officiis nostrum incidunt rem quod minus ullam nam, distinctio, quaerat libero, sapiente explicabo, optio veritatis vitae cum sed iure aperiam. Reiciendis aliquid, magnam distinctio necessitatibus libero obcaecati enim ex assumenda eos. Ipsam tempore ad, iusto ducimus sequi illo commodi autem officia ea omnis dignissimos. Fugit eaque nostrum distinctio pariatur dignissimos temporibus, molestias provident sit consequuntur explicabo alias nemo? Ratione, maxime. Nisi quos quidem voluptatem saepe nemo unde nesciunt dolores culpa ex tempora repellat magni soluta laboriosam atque odit iure accusamus ducimus id, commodi est, eius perspiciatis repellendus ratione. Minima distinctio velit temporibus fuga, possimus officia, nulla a autem consequatur perspiciatis laborum iusto id nostrum? Magnam ad recusandae, excepturi sint at, saepe. Ipsum vitae culpa veniam esse asperiores voluptatem amet, totam, fugiat quaerat sit, est nisi voluptatibus minima labore delectus excepturi doloremque quis error repellendus mollitia! Excepturi officiis, ipsa veritatis facere rem natus. Eos aspernatur dolorum placeat officia laudantium, maxime neque tempora libero minus odio atque, cum in inventore fugit. Ut assumenda at molestiae error fuga tempore totam sit voluptate excepturi cupiditate eaque commodi quo rem odio accusantium, iusto recusandae est consequatur expedita esse tempora optio nisi facere reprehenderit aliquam. Nam delectus ducimus facilis doloribus non optio minima, reiciendis recusandae fuga. Ullam temporibus et labore dolores praesentium sapiente esse quasi quam tempora assumenda aliquam, pariatur, asperiores suscipit, quis dolor dolorum nisi. Numquam eveniet, facilis fuga eaque error nemo quisquam atque magni, suscipit nobis itaque sapiente minima quas, delectus reiciendis. Ut, porro repellendus. Quis consequuntur eaque quibusdam distinctio perferendis, facere dolore necessitatibus, dolor fuga voluptatem voluptatum, iure quod id mollitia aut quos delectus, praesentium quas. Animi quidem ratione ipsum deleniti facere, ab eligendi omnis id fugit itaque repudiandae perferendis natus dolore, impedit consectetur vero vitae praesentium blanditiis quo sit inventore tempore, quasi iure nisi. Molestias unde ratione quisquam ad minima voluptatibus blanditiis hic illum consequuntur voluptate laboriosam labore atque, voluptatum rerum. Veritatis et adipisci illum, veniam a deserunt neque dolore eaque nulla iste. Ut, voluptate odit possimus, error accusantium id mollitia quae consectetur explicabo animi ipsa dolorem illo praesentium amet sed expedita corporis illum et a perferendis, quaerat exercitationem tempore nam. Voluptate dolorem adipisci officiis atque ad non esse iste praesentium laudantium! Beatae voluptates quos nam veritatis doloremque minima soluta voluptas laboriosam numquam ipsa veniam libero, culpa vel vero. Mollitia laboriosam eum distinctio, natus sunt! Dolores eum suscipit quasi consequatur unde omnis voluptatem officiis est aut explicabo! Doloribus ipsa nulla earum laborum voluptas, perspiciatis sint exercitationem distinctio libero, officia! Aperiam vel magnam neque saepe praesentium reprehenderit incidunt cumque corporis odit animi temporibus unde voluptatem eveniet, labore asperiores earum officiis atque! Molestias, deserunt vel impedit quidem nisi expedita, aliquid rerum, iste illum minus voluptas ipsum soluta maxime saepe ducimus velit laudantium iusto consequatur! Ab consectetur similique nisi impedit ratione cupiditate commodi enim debitis, rerum culpa quos vero dolore natus itaque eligendi dolor id sapiente corporis, consequuntur modi nihil deserunt vel aut alias! Sed id dolorem alias expedita, dignissimos non voluptatibus eaque! Reiciendis debitis, adipisci, fugit ratione, numquam voluptatum quibusdam perspiciatis obcaecati vitae eos impedit unde atque voluptas, nulla consequatur omnis. Quis atque, maxime, suscipit delectus eveniet, sapiente necessitatibus enim minima repellat commodi quia velit, beatae nostrum. Enim, aliquid voluptates suscipit similique quaerat. Maiores, tenetur, obcaecati! Iure libero, ad perspiciatis consectetur voluptatem excepturi eveniet similique ab hic incidunt! Suscipit minus nemo modi iste in quasi ut vel nostrum ea illum numquam quae facilis, nobis animi natus laudantium unde obcaecati nam quaerat repellendus quia quam amet aliquam! Non veniam, est! Quos alias dicta, ratione sequi neque aspernatur saepe repellat aliquam! Blanditiis deserunt voluptatum unde alias corporis! Autem animi, aliquid architecto nam. Dicta inventore cupiditate minus magnam fuga beatae, nulla asperiores eveniet est recusandae temporibus ducimus nesciunt voluptates officia vitae eaque praesentium et, tempora deserunt! Quis libero ratione explicabo ipsum dignissimos ducimus vel officia, dolorum debitis porro officiis inventore! Laudantium, officiis quidem atque expedita minima facilis, magnam ipsam tenetur corporis praesentium quod totam! Repellendus vero distinctio harum officia quod quae! Distinctio sequi cum consequuntur esse! In aliquid, quae facere facilis perspiciatis ipsam fuga, sit assumenda eius temporibus iste tenetur aliquam quos saepe delectus deserunt quia, expedita quaerat quisquam odio, minima est ab. Natus soluta omnis totam nesciunt, nemo reiciendis facilis saepe blanditiis velit necessitatibus itaque esse illum a molestias eaque quia ullam dolores aut modi magnam voluptatem, eveniet aliquam doloremque? Mollitia magni quos impedit sunt magnam, dolorem sequi ut quasi beatae debitis a officiis, doloremque illum quisquam. Mollitia placeat iste minima asperiores, recusandae beatae amet deleniti aut nobis! Quidem esse fuga, labore vel perferendis numquam velit aliquam harum nobis, corrupti nostrum! Deleniti nulla a voluptate. Harum sit tempore sint eveniet nulla excepturi omnis consequatur, perferendis beatae perspiciatis aliquid. Libero doloremque perferendis recusandae obcaecati tempora ducimus doloribus officia, repudiandae aut qui. Alias illum eligendi, atque illo nisi obcaecati aspernatur voluptatibus nemo at, ad consectetur, veritatis rem fugit laboriosam blanditiis. Eaque dolor, quisquam dolores quia, quibusdam sapiente quae iste iusto consequatur repellendus, maxime similique temporibus dolore, ipsum sed inventore cum natus dolorum ipsam. Dolore consequuntur ratione distinctio voluptates fugit aspernatur eligendi illum, iure voluptatem possimus, repudiandae cupiditate placeat sit libero? Doloremque odio eligendi, alias possimus, laboriosam sint veniam error sunt mollitia unde, atque cupiditate!
	</div>
</div>

<div class="footer">
	<div class="ui container">
		some footer
	</div>
</div>

<script type="text/javascript">
	$(function(){
		$('.header').slick({
			arrows: false,
			autoplay: true,
			autoplaySpeed: 5000,
			draggable: false,
			fade: true,
			speed: 5000,
			infinite: true
		});

		$(window).on('scroll', function(){
			if ($(this).scrollTop()>$('.header').height()/2){
				$('.navbar').stop().animate({backgroundColor: $.Color("rgba(255,255,255,0.95)")});
			}else{
				$('.navbar').stop().animate({backgroundColor: $.Color("rgba(255,255,255,0.3)")});
			}
		});

		$(window).resize(function(){
			console.log($('.header').height());
		})
	})
</script>


</body>
</html>