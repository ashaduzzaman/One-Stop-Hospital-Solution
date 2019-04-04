const app3 = new Vue({
    el: '#test',
    data: {
        newTest: '',
        tests: []
      },
      methods: {
          addTest:function(){
              this.tests.push({
                  name: this.newTest,
              });
              this.newTest='';
              
          },
          removetest:function(test){
              const index = this.tests.indexOf(test);
              this.tests.splice(index, 1);
          }
      }
});

