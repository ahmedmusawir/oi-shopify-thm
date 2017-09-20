
new Vue ({
  el: '#imb-home-testimonial',
  data: {
    news:           'LATEST NEWS',  
    ajax:           'http://jennifer.local/',
    posts:          '',
    count:           1,
    singlePost:     [''],
    show:           false,
    id:             '' 
  },  
  created: function() {

    this.getNews();
    // this.getVids();

    this.getSingle(758);
    // this.getSingleVid(3310);
  },
  methods: {
     getNews: function() {

        var app = this;

         // axios.get( app.ajax + '/wp-json/wp/v2/posts?categories=5&per_page=100')
         // axios.get( app.ajax + '/wp-json/wp/v2/posts?per_page=100')
         axios.get( app.ajax + '/wp-json/wp/v2/testimonials-api?per_page=100')
          .then(function(response) {
            app.posts = response.data;
            app.id = app.posts[0].id;

            console.log(app.posts);

            return app.posts;
        })
         .catch(function(error){
           console.log(error);
         });

     },
     // getVids: function() {

     //    var app = this;

     //     axios.get( app.ajax + '/wp-json/wp/v2/posts?categories=67&per_page=100')
     //      .then(function(response) {
     //        app.vids = response.data;
     //        app.id = app.vids[0].id;

     //        return app.vids;
     //    })
     //     .catch(function(error){
     //       console.log(error);
     //     });

     // },     

     getSingle: function(id, show) {

        var app = this;

        console.log("this is id: " + id);

         axios.get( app.ajax + '/wp-json/wp/v2/posts/' + id)
          .then(function(response) {
            // app.singlePostData = response.data;
            // console.log(response.data.title.rendered);
            // console.log(response.data);
            

            app.show = true;

            app.singlePost = {


              id:             response.data.id,
              title:          response.data.title.rendered,
              content:        response.data.content.rendered,
              featured_full:  response.data.featured_full 
            }

            // console.log( app.singlePost );

            return app.singlePost;

            app.show = false;
        })
         .catch(function(error){
           console.log(error);
         })
     },


     getSingleNews: function(id, show) {

        var app = this;

        console.log("this is id: " + id);

         axios.get( app.ajax + '/wp-json/wp/v2/posts/' + id)
          .then(function(response) {
            // app.singlePostData = response.data;
            // console.log(response.data.title.rendered);
            // console.log(response.data);
            

            app.show = true;

            app.singlePost = {


              id:             response.data.id,
              title:          response.data.title.rendered,
              content:        response.data.content.rendered,
              featured_full:  response.data.featured_full 
            }

            // console.log( app.singlePost );

            return app.singlePost;

            app.show = false;
        })
         .catch(function(error){
           console.log(error);
         })
     },


         
  }

});


// new Vue ({
//   el: '#app',
//   data: {
//     message:  'Vue 2.0 is Working',
//     ajax:     'Posts Should Display Here',
//     posts:    ''
//   },
//   methods: {
//     selectFruit(post) {
//       this.message = post;
//     }
//   },
//   created: function() {
//     // console.log('created ran');
//     this.$http.get('http://dmol.local/wp-json/wp/v2/posts/')
//       .then(function(response){
//           console.log(response);

//           this.posts = response.data;
//       });
//   }
// });




// new Vue ({
//   el: '#app',
//   data: {
//     message: 'Hello Vue 2.0',
//     fruits: [ 'apple', 'Microsoft', 'VMware', 'OSx' ]
//   },
//   methods: {
//     selectFruit(fruit) {
//       this.message = fruit;
//     }
//   }
// });