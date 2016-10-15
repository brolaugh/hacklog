

# URL guide / URL structure
blogname.domain.tld = domain.tld/blogname

{variable} - insert an appropriate variable eg. my-blog-about-horses


| URL                            | Usage                                                                                                                                |
| ------------------------------ | ------------------------------------------------------------------------------------------------------------------------------------ |
| /                              | Alias for /home/index                                                                                                                |
| /home/index                    | /home/register and /home/login combination                                                                                           |
| /login                         | Page at which you login                                                                                                              |
| /register                      | Page at which you register                                                                                                           |
| /search                        | The place to search for all the stuff                                                                                                |
| /{blogname}                    | Index for a blog                                                                                                                     |
| /{blogname}/{postname}         | Visit a particular blog post if postname is valid and postname isn't a method in the controller                                      |
| /{blogname}/post/{postname}    | Visit a particular blog post                                                                                                         |
| /{blogname}/search/{query}  | Searching in that particular blog                                                                                                    |
| /{blogname}/settings           | Settings for a blog, only accessable to the owner of the blog                                                                        |
| /{blogname}/compose            | Page at which you write your posts                                                                                                   |
| /{blogname}/compose/{postname} | Page at which you want to edit an existing post that has either been published or not                                                |
| /new/blog                      | Page at which you create a new blog                                                                                                  |
| /new/post                      | Page at which you write a new post and selects which blog you want to post it to                                                     |
| /account                       | Index for configuring your account, making new blogs and personalities. Basicly everything that has to do with your account          |
| __Misc__                       | __Usage__                                                                                                                            |
| \*/page/{int}/\*               | If pagination is present {int} will be used as offset                                                                                |
| \*/tagged/{tag}/\*             | When searching for a tag is relevant it will be used to filter results                                                               |
|  \*/tagged/{tag}/reverse/\*    | Same as above but in the reverse order                                                                                               |
| \*/{aDate}/\*                  | If wanting a specific date                                                                                                           |
|\*/{aDate}/{aDate}/\*           | If wanting a date range                                                                                                              |
