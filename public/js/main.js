

const app = new Vue({
	el:"#app",
   computed:{
   	Suzy(){
if(window.location.href.indexOf("Home") >-1){
       	return "active";
       }
   	},
   	Maro(){
   		if(window.location.href.indexOf("Profile") >-1){
       	return "active";
       }
   	},
   	May(){
       if(window.location.href.indexOf("Celebrities") >-1){
       	return "active";
       }
   	},
   		News(){
       if(window.location.href.indexOf("News") >-1){
       	return "active";
       }
   	}
   }
});
const xx = new Vue({
  el:"#xx",
   data:{
    soso:false,
    lolo:false,
    mimi:false,

   },
  mounted(){
      this.soso= true;
      this.lolo= true;
       this.mimi= true;
  }
});

const ry = new Vue({
  el:"#ry",
  mounted(){
    if(window.location.href.indexOf("sign") >-1){
      window.location.href="http://localhost/ProtectNature/ItsOwers/Profile/user";
       }
       if(window.location.href.indexOf("usuario") >-1){
      window.location.href="http://localhost/ProtectNature/ItsOwers/Profile/up";
       }
       if(window.location.href.indexOf("upload") >-1){
      window.location.href="http://localhost/ProtectNature/ItsOwers/Profile/";
       }
          if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(this.lola(),this.failure());}

  },
  data:{
    mary:true,
    login:false,
    x:"",
    long:"",
    lat:""
  },
  methods:{
    sign(){
      this.mary=true;
      this.login=false;
    },
    log(){
      this.mary=false;
      this.login=true;
    },
  
     
    lola(position){
        this.long = position.coords.latitude;
    this.lat=     position.coords.longitude ;
    },
    falure(){

    }
    // addU(){
    //   window.location.url="http://localhost/ProtectNature/ItsOwers/Profile/Login";
    // }
  }
})