var $blogTemplate = $("[blogs]").clone();
$("[blogs]").html("");

var queryString = window.location.search;
var urlParams = new URLSearchParams(queryString);
var category_id = urlParams.get("category_id");

var Blogs = {
  blogs: [],
  blogs_per_page: 0,
  blogs_total: 0,
  xhr: {
    get_blogs: null,
  },

  getBlogs: function (pageNumber, refresh = false) {
    if (Blogs.xhr.get_blogs) Blogs.xhr.get_blogs.abort();

    var url =
      $("meta[name='BASE_URL']").attr("content") +
      "/blogs/data?page=" +
      pageNumber;

    if (category_id != null) {
      url += "&" + `category_id=${category_id}`;
    }

    $.get(url, function (response) {
      $("#blogs_fake_blogs_page").removeClass("d-none");

      Blogs.blogs_per_page = response.per_page;
      Blogs.blogs_total = response.total;

      $("[blogs]").html("");
      var blogs = "";

      $(response.data).each(function () {
        Blogs.blogs.push(this);
        blogs += Blogs.getBlogHtml(this);
      });

      if (Blogs.blogs_total == 0) {
        $("#pagination_container_blogs").addClass("d-none");
      }

      $("[blogs]").append(blogs);
      $("#blogs_fake_blogs_page").addClass("d-none");

      if (refresh) {
        var items = $(".blogs .cards .post-slide");
        var numBlogs = Blogs.blogs_total;

        items.slice(Blogs.blogs_per_page).hide();

        $("#pagination_container_blogs").pagination({
          items: numBlogs,
          itemsOnPage: Blogs.blogs_per_page,
          prevText: "&laquo;",
          nextText: "&raquo;",
          onPageClick: function (pageNumber) {
            Blogs.getBlogs(pageNumber);
            $(window).scrollTop(50);
          },
        });
      }
    });
  },

  getBlogHtml: function (blog) {
    var $blog = $blogTemplate.clone();

    $blog
      .find('[data-source="href"]')
      .attr(
        "href",
        $('meta[name="BASE_URL"]').attr("content") + `/blogs/${blog.slug}`
      );

    var blog_description = blog.description;

    if (blog_description.length > 150) {
      var string = blog_description.substring(0, 150);
      $blog.find('[data-source="content"]').html(string + " ...");
    } else {
      $blog
        .find('[data-source="content"]')
        .html(blog.description.replace(/<[^>]*>?/gm, ""));
    }

    $blog.find('[data-source="title"]').html(blog.title);
    $blog
      .find('[data-source="title"]')
      .attr(
        "href",
        $('meta[name="BASE_URL"]').attr("content") + `/blogs/${blog.slug}`
      );

    $blog.find('[data-source="category-name"]').html(blog.category.name);
    $blog
      .find('[data-source="category-name"]')
      .attr(
        "href",
        $('meta[name="BASE_URL"]').attr("content") +
          `/blogs?category_id=${blog.category_id}`
      );

    $blog.find('[data-source="created-at"]').html(blog.created_at);

    $blog
      .find('[data-source="img"]')
      .css("background-image", "url(" + blog.image_url + ")");

    return $blog.html();
  },
};

$(function () {
  Blogs.getBlogs(1, (refresh = true));
});
