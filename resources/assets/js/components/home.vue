<template>
<div>


<nav class="panel">
  <p class="panel-heading">
    VueJs PhoneBook   <button class="button is-primary is-outlined" @click="openAdd">Add Modal</button>
  </p>
  
  <div class="panel-block">
    <p class="control has-icons-left">
      <input class="input is-small" type="text" placeholder="search">
      <span class="icon is-small is-left">
        <i class="fas fa-search" aria-hidden="true"></i>
      </span>
    </p>
  </div>
    <a class="panel-block" v-for="item,key in lists">
	  	<span class="column is-9">
	    	{{ item.name }}
	  	</span>
	    <span class="panel-icon column is-1">
	      <i class="has-text-danger fa fa-trash" aria-hidden="true"></i>
	    </span>
	    <span class="panel-icon column is-1">
	      <i class="has-text-info fa fa-edit" aria-hidden="true" @click="openEdit(key)"></i>
	    </span>
      <span class="panel-icon column is-1">
	      <i class="has-text-primary fa fa-eye" aria-hidden="true"  @click="openShow(key)"></i>
	    </span>
	  </a>

  
  
</nav>

<Add :openmodal='addActive' @closeRequest='close'></Add>

<Show :openmodal='showActive' @closeRequest='close'></Show>
<Edit :openmodal='editActive' @closeRequest='close'></Edit>
</div>
</template>


<script>

let Add = require('./Add.vue');
let Show = require('./show.vue');
let Edit = require('./Edit.vue');
export default{

components: {Add,Show,Edit},
data(){
return{

  addActive: '',
  showActive: '',
  editActive: '',
  lists:{},
  errors:{}
}
},

mounted(){


axios.post('/getData').then((response)=>this.lists=response.data)
.catch((error) => this.errors = error.response.data.errors)



},



methods:{

  openAdd(){
    this.addActive = 'is-active';
  },

 openShow(key){

this.$children[1].list = this.lists[key]

    this.showActive = 'is-active';
  },



   openEdit(key){

this.$children[1].list = this.lists[key]
    this.editActive = 'is-active';
  },


  close(){

this.addActive = this.showActive = ''

  }
}
}


</script>