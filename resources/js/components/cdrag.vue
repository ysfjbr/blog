<template>
  <p>
    <input type="hidden" name="POrder" :value="ordervalue" >

        {{ draggingInfo }}
    
        <draggable
          :list="list"
          :disabled="!enabled"
          class="list-group"
          ghost-class="ghost"
          :move="checkMove"
          @start="dragging = true"
          @end="dragging = false"
          @update="onUpdate"
        >

          <div
            v-for="element in list"
            :key="element.title"
            class="list-group-item dragCursor"
            v-bind:class="getclass(element.online)"
            v-bind:id="element.id"
          >
              {{ element.title }} 
            
          </div>
        </draggable>
  </p>
</template>

<script>
import draggable from "vuedraggable";
let id = 1;
export default {
  name: "simple",
  display: "Simple",
  order: 0,
  props: ["list"],
  components: {
    draggable
  },
  data() {
    return {
      enabled: true,
      dragging: false,
      ordervalue: "0,1,2,3",
    };
  },
  computed: {
    draggingInfo() {
      return this.dragging ? "" : "";
    }
    
  },
  mounted () {
    //console.log(list);
    this.ordervalue = this.list.map(ob => ob.id).toString();
  },
  methods: {
    add: function() {
      //this.list.push({ name: "Juan " + id, id: id++ });
    },
    replace: function() {
      //this.list = [{ name: "Edgard", id: id++ }];
    },
    checkMove: function(e) {
      //window.console.log("Future index: " + e.draggedContext.futureIndex);
      //this.ordervalue = e
      
      
    },
    getclass:function(online)
    {
      return online===1? "online":"offline";
    },
    onUpdate(){
      //here you have access to the update list via this.list...
      //this.$emit('updated', this.list);
      this.ordervalue = this.list.map(ob => ob.id).toString();
   }
  }
};
</script>
<style scoped>
.buttons {
  margin-top: 35px;
}
.ghost {
  opacity: 0.5;
  background: #c8ebfb;
}

.offline
{
  opacity: 0.3;
}

.dragCursor
{
  cursor:grabbing;
}

</style>