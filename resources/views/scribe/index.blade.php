<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Eden Allergies API Docs</title>

    <link href="https://fonts.googleapis.com/css?family=PT+Sans&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset("vendor/scribe/css/theme-default.style.css") }}" media="screen">
    <link rel="stylesheet" href="{{ asset("vendor/scribe/css/theme-default.print.css") }}" media="print">
    <script src="{{ asset("vendor/scribe/js/theme-default-3.8.0.js") }}"></script>

    <link rel="stylesheet"
          href="//unpkg.com/@highlightjs/cdn-assets@10.7.2/styles/obsidian.min.css">
    <script src="//unpkg.com/@highlightjs/cdn-assets@10.7.2/highlight.min.js"></script>
    <script>hljs.highlightAll();</script>

    <script src="//cdn.jsdelivr.net/npm/lodash@4.17.10/lodash.min.js"></script>
    <script>
        var baseUrl = "http://localhost:8000";
    </script>
    <script src="{{ asset("vendor/scribe/js/tryitout-3.8.0.js") }}"></script>

</head>

<body data-languages="[&quot;bash&quot;,&quot;javascript&quot;]">
<a href="#" id="nav-button">
      <span>
        MENU
        <img src="{{ asset("vendor/scribe/images/navbar.png") }}" alt="navbar-image" />
      </span>
</a>
<div class="tocify-wrapper">
                <div class="lang-selector">
                            <a href="#" data-language-name="bash">bash</a>
                            <a href="#" data-language-name="javascript">javascript</a>
                    </div>
        <div class="search">
        <input type="text" class="search" id="input-search" placeholder="Search">
    </div>
    <ul class="search-results"></ul>

    <ul id="toc">
    </ul>

            <ul class="toc-footer" id="toc-footer">
                            <li><a href="{{ route("scribe.postman") }}">View Postman collection</a></li>
                            <li><a href="{{ route("scribe.openapi") }}">View OpenAPI spec</a></li>
                            <li><a href="http://github.com/knuckleswtf/scribe">Documentation powered by Scribe ✍</a></li>
                    </ul>
            <ul class="toc-footer" id="last-updated">
            <li>Last updated: August 5 2021</li>
        </ul>
</div>
<div class="page-wrapper">
    <div class="dark-box"></div>
    <div class="content">
        <h1>Introduction</h1>
<p>This documentation aims to provide all the information you need to work with our API.</p>
<aside>As you scroll, you'll see code examples for working with the API in different programming languages in the dark area to the right (or as part of the content on mobile).
You can switch the language used with the tabs at the top right (or from the nav menu at the top left on mobile).</aside>
<blockquote>
<p>Base URL</p>
</blockquote>
<pre><code class="language-yaml">http://localhost:8000</code></pre>

        <h1>Authenticating requests</h1>
<p>This API is not authenticated.</p>

        <h1 id=""></h1>

    

            <h2 id="-GETapi--fallbackPlaceholder-">GET api/{fallbackPlaceholder}</h2>

<p>
</p>



<span id="example-requests-GETapi--fallbackPlaceholder-">
<blockquote>Example request:</blockquote>


<pre><code class="language-bash">curl --request GET \
    --get "http://localhost:8000/api/" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre>

<pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
</span>

<span id="example-responses-GETapi--fallbackPlaceholder-">
            <blockquote>
            <p>Example response (404):</p>
        </blockquote>
                <details class="annotation">
            <summary>
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
 </code></pre>
        </details>         <pre>

<code class="language-json">{
    &quot;message&quot;: &quot;The specified URL could not be found&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi--fallbackPlaceholder-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi--fallbackPlaceholder-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi--fallbackPlaceholder-"></code></pre>
</span>
<span id="execution-error-GETapi--fallbackPlaceholder-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi--fallbackPlaceholder-"></code></pre>
</span>
<form id="form-GETapi--fallbackPlaceholder-" data-method="GET"
      data-path="api/{fallbackPlaceholder}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi--fallbackPlaceholder-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi--fallbackPlaceholder-"
                    onclick="tryItOut('GETapi--fallbackPlaceholder-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi--fallbackPlaceholder-"
                    onclick="cancelTryOut('GETapi--fallbackPlaceholder-');" hidden>Cancel
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi--fallbackPlaceholder-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/{fallbackPlaceholder}</code></b>
        </p>
                    <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>fallbackPlaceholder</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="fallbackPlaceholder"
               data-endpoint="GETapi--fallbackPlaceholder-"
               data-component="url" required  hidden>
    <br>
            </p>
                    </form>

        <h1 id="allergy-endpoints">Allergy Endpoints</h1>

    <p>API Endpoints for managing allergies</p>

            <h2 id="allergy-endpoints-GETapi-allergies">GET api/allergies</h2>

<p>
</p>

<p>Display a listing of allergies</p>

<span id="example-requests-GETapi-allergies">
<blockquote>Example request:</blockquote>


<pre><code class="language-bash">curl --request GET \
    --get "http://localhost:8000/api/allergies?page=7" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre>

<pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/allergies"
);

const params = {
    "page": "7",
};
Object.keys(params)
    .forEach(key =&gt; url.searchParams.append(key, params[key]));

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
</span>

<span id="example-responses-GETapi-allergies">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;data&quot;: [
        {
            &quot;id&quot;: null,
            &quot;title&quot;: null,
            &quot;description&quot;: null,
            &quot;created_at&quot;: null,
            &quot;updated_at&quot;: null,
            &quot;deleted_at&quot;: null,
            &quot;links&quot;: {
                &quot;meals&quot;: &quot;http:\/\/localhost:8000\/api\/allergies\/\/meals\/&quot;
            }
        },
        {
            &quot;id&quot;: null,
            &quot;title&quot;: null,
            &quot;description&quot;: null,
            &quot;created_at&quot;: null,
            &quot;updated_at&quot;: null,
            &quot;deleted_at&quot;: null,
            &quot;links&quot;: {
                &quot;meals&quot;: &quot;http:\/\/localhost:8000\/api\/allergies\/\/meals\/&quot;
            }
        }
    ],
    &quot;links&quot;: {
        &quot;first&quot;: &quot;\/?page=1&quot;,
        &quot;last&quot;: &quot;\/?page=1&quot;,
        &quot;prev&quot;: null,
        &quot;next&quot;: null
    },
    &quot;meta&quot;: {
        &quot;current_page&quot;: 1,
        &quot;from&quot;: 1,
        &quot;last_page&quot;: 1,
        &quot;links&quot;: [
            {
                &quot;url&quot;: null,
                &quot;label&quot;: &quot;&amp;laquo; Previous&quot;,
                &quot;active&quot;: false
            },
            {
                &quot;url&quot;: &quot;\/?page=1&quot;,
                &quot;label&quot;: &quot;1&quot;,
                &quot;active&quot;: true
            },
            {
                &quot;url&quot;: null,
                &quot;label&quot;: &quot;Next &amp;raquo;&quot;,
                &quot;active&quot;: false
            }
        ],
        &quot;path&quot;: &quot;\/&quot;,
        &quot;per_page&quot;: &quot;10&quot;,
        &quot;to&quot;: 2,
        &quot;total&quot;: 2
    }
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-allergies" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-allergies"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-allergies"></code></pre>
</span>
<span id="execution-error-GETapi-allergies" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-allergies"></code></pre>
</span>
<form id="form-GETapi-allergies" data-method="GET"
      data-path="api/allergies"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-allergies', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-allergies"
                    onclick="tryItOut('GETapi-allergies');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-allergies"
                    onclick="cancelTryOut('GETapi-allergies');" hidden>Cancel
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-allergies" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/allergies</code></b>
        </p>
                        <h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
                    <p>
                <b><code>page</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
                <input type="number"
               name="page"
               data-endpoint="GETapi-allergies"
               data-component="query"  hidden>
    <br>
<p>Page number to show.</p>            </p>
                </form>

    <h3>Response</h3>
    <h4 class="fancy-heading-panel"><b>Response Fields</b></h4>
            <p>
            <b><code>id</code></b>&nbsp;&nbsp;  &nbsp;
<br>
<p>The id of the allergy</p>        </p>
            <p>
            <b><code>title</code></b>&nbsp;&nbsp;  &nbsp;
<br>
<p>The title of the allergy</p>        </p>
            <p>
            <b><code>description</code></b>&nbsp;&nbsp;  &nbsp;
<br>
<p>The description of the allergy</p>        </p>
            <p>
            <b><code>meals</code></b>&nbsp;&nbsp;  &nbsp;
<br>
<p>The url to get allergy meals</p>        </p>
            <p>
            <b><code>created_at</code></b>&nbsp;&nbsp;  &nbsp;
<br>
<p>Timestamp allergy was created</p>        </p>
            <p>
            <b><code>updated_at</code></b>&nbsp;&nbsp;  &nbsp;
<br>
<p>Timestamp allergy was last updated</p>        </p>
            <p>
            <b><code>deleted_at</code></b>&nbsp;&nbsp;  &nbsp;
<br>
<p>Timestamp allergy was trashed</p>        </p>
                <h2 id="allergy-endpoints-GETapi-allergies--id-">GET api/allergies/{id}</h2>

<p>
</p>

<p>Get a specific allergy</p>

<span id="example-requests-GETapi-allergies--id-">
<blockquote>Example request:</blockquote>


<pre><code class="language-bash">curl --request GET \
    --get "http://localhost:8000/api/allergies/9" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre>

<pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/allergies/9"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
</span>

<span id="example-responses-GETapi-allergies--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;data&quot;: {
        &quot;id&quot;: null,
        &quot;title&quot;: null,
        &quot;description&quot;: null,
        &quot;created_at&quot;: null,
        &quot;updated_at&quot;: null,
        &quot;deleted_at&quot;: null,
        &quot;links&quot;: {
            &quot;meals&quot;: &quot;http:\/\/localhost:8000\/api\/allergies\/\/meals\/&quot;
        }
    }
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-allergies--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-allergies--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-allergies--id-"></code></pre>
</span>
<span id="execution-error-GETapi-allergies--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-allergies--id-"></code></pre>
</span>
<form id="form-GETapi-allergies--id-" data-method="GET"
      data-path="api/allergies/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-allergies--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-allergies--id-"
                    onclick="tryItOut('GETapi-allergies--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-allergies--id-"
                    onclick="cancelTryOut('GETapi-allergies--id-');" hidden>Cancel
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-allergies--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/allergies/{id}</code></b>
        </p>
                    <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="id"
               data-endpoint="GETapi-allergies--id-"
               data-component="url" required  hidden>
    <br>
<p>The ID of the allergy.</p>            </p>
                    </form>

    <h3>Response</h3>
    <h4 class="fancy-heading-panel"><b>Response Fields</b></h4>
            <p>
            <b><code>id</code></b>&nbsp;&nbsp;  &nbsp;
<br>
<p>The id of the newly created allergy</p>        </p>
            <p>
            <b><code>title</code></b>&nbsp;&nbsp;  &nbsp;
<br>
<p>The title of the allergy</p>        </p>
            <p>
            <b><code>description</code></b>&nbsp;&nbsp;  &nbsp;
<br>
<p>The description of the allergy</p>        </p>
            <p>
            <b><code>meals</code></b>&nbsp;&nbsp;  &nbsp;
<br>
<p>The url to get allergy meals</p>        </p>
            <p>
            <b><code>created_at</code></b>&nbsp;&nbsp;  &nbsp;
<br>
<p>Timestamp allergy was created</p>        </p>
            <p>
            <b><code>updated_at</code></b>&nbsp;&nbsp;  &nbsp;
<br>
<p>Timestamp allergy was last updated</p>        </p>
            <p>
            <b><code>deleted_at</code></b>&nbsp;&nbsp;  &nbsp;
<br>
<p>Timestamp allergy was trashed</p>        </p>
                <h2 id="allergy-endpoints-GETapi-allergies--allergy--meals">GET api/allergies/{id}/meals</h2>

<p>
</p>

<p>Display meals for the specified allergy from storage</p>

<span id="example-requests-GETapi-allergies--allergy--meals">
<blockquote>Example request:</blockquote>


<pre><code class="language-bash">curl --request GET \
    --get "http://localhost:8000/api/allergies/19/meals" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre>

<pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/allergies/19/meals"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
</span>

<span id="example-responses-GETapi-allergies--allergy--meals">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;data&quot;: [
        {
            &quot;id&quot;: null,
            &quot;title&quot;: &quot;Enim qui.&quot;,
            &quot;description&quot;: &quot;Aut qui est quo ut officiis reiciendis.&quot;,
            &quot;allergy&quot;: null,
            &quot;created_at&quot;: null,
            &quot;updated_at&quot;: null,
            &quot;deleted_at&quot;: null,
            &quot;links&quot;: {
                &quot;items&quot;: &quot;http:\/\/localhost:8000\/api\/meals\/\/items\/&quot;
            }
        },
        {
            &quot;id&quot;: null,
            &quot;title&quot;: &quot;Nobis eum.&quot;,
            &quot;description&quot;: &quot;Nihil quo qui quia ipsa sequi id et corrupti commodi molestiae.&quot;,
            &quot;allergy&quot;: null,
            &quot;created_at&quot;: null,
            &quot;updated_at&quot;: null,
            &quot;deleted_at&quot;: null,
            &quot;links&quot;: {
                &quot;items&quot;: &quot;http:\/\/localhost:8000\/api\/meals\/\/items\/&quot;
            }
        }
    ],
    &quot;links&quot;: {
        &quot;first&quot;: &quot;\/?page=1&quot;,
        &quot;last&quot;: &quot;\/?page=1&quot;,
        &quot;prev&quot;: null,
        &quot;next&quot;: null
    },
    &quot;meta&quot;: {
        &quot;current_page&quot;: 1,
        &quot;from&quot;: 1,
        &quot;last_page&quot;: 1,
        &quot;links&quot;: [
            {
                &quot;url&quot;: null,
                &quot;label&quot;: &quot;&amp;laquo; Previous&quot;,
                &quot;active&quot;: false
            },
            {
                &quot;url&quot;: &quot;\/?page=1&quot;,
                &quot;label&quot;: &quot;1&quot;,
                &quot;active&quot;: true
            },
            {
                &quot;url&quot;: null,
                &quot;label&quot;: &quot;Next &amp;raquo;&quot;,
                &quot;active&quot;: false
            }
        ],
        &quot;path&quot;: &quot;\/&quot;,
        &quot;per_page&quot;: &quot;10&quot;,
        &quot;to&quot;: 2,
        &quot;total&quot;: 2
    }
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-allergies--allergy--meals" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-allergies--allergy--meals"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-allergies--allergy--meals"></code></pre>
</span>
<span id="execution-error-GETapi-allergies--allergy--meals" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-allergies--allergy--meals"></code></pre>
</span>
<form id="form-GETapi-allergies--allergy--meals" data-method="GET"
      data-path="api/allergies/{allergy}/meals"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-allergies--allergy--meals', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-allergies--allergy--meals"
                    onclick="tryItOut('GETapi-allergies--allergy--meals');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-allergies--allergy--meals"
                    onclick="cancelTryOut('GETapi-allergies--allergy--meals');" hidden>Cancel
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-allergies--allergy--meals" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/allergies/{allergy}/meals</code></b>
        </p>
                    <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>allergy</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="allergy"
               data-endpoint="GETapi-allergies--allergy--meals"
               data-component="url" required  hidden>
    <br>
            </p>
                    </form>

    <h3>Response</h3>
    <h4 class="fancy-heading-panel"><b>Response Fields</b></h4>
            <p>
            <b><code>id</code></b>&nbsp;&nbsp;  &nbsp;
<br>
<p>The id of a meal</p>        </p>
            <p>
            <b><code>title</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<br>
<p>The title of a meal</p>        </p>
            <p>
            <b><code>description</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<br>
<p>The description of a allergy</p>        </p>
            <p>
            <b><code>allergy</code></b>&nbsp;&nbsp;  &nbsp;
<br>
<p>The allergy the meal belongs to</p>        </p>
            <p>
            <b><code>items</code></b>&nbsp;&nbsp;  &nbsp;
<br>
<p>The url to get meal items</p>        </p>
            <p>
            <b><code>created_at</code></b>&nbsp;&nbsp;  &nbsp;
<br>
<p>Timestamp meal was created</p>        </p>
            <p>
            <b><code>updated_at</code></b>&nbsp;&nbsp;  &nbsp;
<br>
<p>Timestamp meal was last updated</p>        </p>
            <p>
            <b><code>deleted_at</code></b>&nbsp;&nbsp;  &nbsp;
<br>
<p>Timestamp meal was trashed</p>        </p>
                <h2 id="allergy-endpoints-POSTapi-allergies">POST api/allergies</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>Store a newly created allergy in storage.</p>

<span id="example-requests-POSTapi-allergies">
<blockquote>Example request:</blockquote>


<pre><code class="language-bash">curl --request POST \
    "http://localhost:8000/api/allergies" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"title\": \"voluptatem\",
    \"description\": \"aliquid\"
}"
</code></pre>

<pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/allergies"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "title": "voluptatem",
    "description": "aliquid"
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre>
</span>

<span id="example-responses-POSTapi-allergies">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;data&quot;: {
        &quot;id&quot;: null,
        &quot;title&quot;: null,
        &quot;description&quot;: null,
        &quot;created_at&quot;: null,
        &quot;updated_at&quot;: null,
        &quot;deleted_at&quot;: null,
        &quot;links&quot;: {
            &quot;meals&quot;: &quot;http:\/\/localhost:8000\/api\/allergies\/\/meals\/&quot;
        }
    }
}</code>
 </pre>
    </span>
<span id="execution-results-POSTapi-allergies" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-allergies"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-allergies"></code></pre>
</span>
<span id="execution-error-POSTapi-allergies" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-allergies"></code></pre>
</span>
<form id="form-POSTapi-allergies" data-method="POST"
      data-path="api/allergies"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-allergies', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-allergies"
                    onclick="tryItOut('POSTapi-allergies');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-allergies"
                    onclick="cancelTryOut('POSTapi-allergies');" hidden>Cancel
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-allergies" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/allergies</code></b>
        </p>
                <p>
            <label id="auth-POSTapi-allergies" hidden>Authorization header:
                <b><code>Bearer </code></b><input type="text"
                                                                name="Authorization"
                                                                data-prefix="Bearer "
                                                                data-endpoint="POSTapi-allergies"
                                                                data-component="header"></label>
        </p>
                        <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <p>
            <b><code>title</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="title"
               data-endpoint="POSTapi-allergies"
               data-component="body" required  hidden>
    <br>
<p>The title of the allergy</p>        </p>
                <p>
            <b><code>description</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
                <input type="text"
               name="description"
               data-endpoint="POSTapi-allergies"
               data-component="body"  hidden>
    <br>
<p>The description of the allergy</p>        </p>
    
    </form>

    <h3>Response</h3>
    <h4 class="fancy-heading-panel"><b>Response Fields</b></h4>
            <p>
            <b><code>id</code></b>&nbsp;&nbsp;  &nbsp;
<br>
<p>The id of the newly created allergy</p>        </p>
            <p>
            <b><code>title</code></b>&nbsp;&nbsp;  &nbsp;
<br>
<p>The title of the allergy</p>        </p>
            <p>
            <b><code>description</code></b>&nbsp;&nbsp;  &nbsp;
<br>
<p>The description of the allergy</p>        </p>
            <p>
            <b><code>meals</code></b>&nbsp;&nbsp;  &nbsp;
<br>
<p>The url to get allergy meals</p>        </p>
            <p>
            <b><code>created_at</code></b>&nbsp;&nbsp;  &nbsp;
<br>
<p>Timestamp allergy was created</p>        </p>
            <p>
            <b><code>updated_at</code></b>&nbsp;&nbsp;  &nbsp;
<br>
<p>Timestamp allergy was last updated</p>        </p>
            <p>
            <b><code>deleted_at</code></b>&nbsp;&nbsp;  &nbsp;
<br>
<p>Timestamp allergy was trashed</p>        </p>
                <h2 id="allergy-endpoints-PUTapi-allergies--id-">PUT api/allergies/{id}</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>Update the specified allergy in storage.</p>

<span id="example-requests-PUTapi-allergies--id-">
<blockquote>Example request:</blockquote>


<pre><code class="language-bash">curl --request PUT \
    "http://localhost:8000/api/allergies/20" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"title\": \"sequi\",
    \"description\": \"et\"
}"
</code></pre>

<pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/allergies/20"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "title": "sequi",
    "description": "et"
}

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre>
</span>

<span id="example-responses-PUTapi-allergies--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;data&quot;: {
        &quot;id&quot;: null,
        &quot;title&quot;: null,
        &quot;description&quot;: null,
        &quot;created_at&quot;: null,
        &quot;updated_at&quot;: null,
        &quot;deleted_at&quot;: null,
        &quot;links&quot;: {
            &quot;meals&quot;: &quot;http:\/\/localhost:8000\/api\/allergies\/\/meals\/&quot;
        }
    }
}</code>
 </pre>
    </span>
<span id="execution-results-PUTapi-allergies--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTapi-allergies--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-allergies--id-"></code></pre>
</span>
<span id="execution-error-PUTapi-allergies--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-allergies--id-"></code></pre>
</span>
<form id="form-PUTapi-allergies--id-" data-method="PUT"
      data-path="api/allergies/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTapi-allergies--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTapi-allergies--id-"
                    onclick="tryItOut('PUTapi-allergies--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTapi-allergies--id-"
                    onclick="cancelTryOut('PUTapi-allergies--id-');" hidden>Cancel
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTapi-allergies--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>api/allergies/{id}</code></b>
        </p>
            <p>
            <small class="badge badge-purple">PATCH</small>
            <b><code>api/allergies/{id}</code></b>
        </p>
                <p>
            <label id="auth-PUTapi-allergies--id-" hidden>Authorization header:
                <b><code>Bearer </code></b><input type="text"
                                                                name="Authorization"
                                                                data-prefix="Bearer "
                                                                data-endpoint="PUTapi-allergies--id-"
                                                                data-component="header"></label>
        </p>
                <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="id"
               data-endpoint="PUTapi-allergies--id-"
               data-component="url" required  hidden>
    <br>
<p>The ID of the allergy.</p>            </p>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <p>
            <b><code>title</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="title"
               data-endpoint="PUTapi-allergies--id-"
               data-component="body" required  hidden>
    <br>
<p>The new title of the allergy</p>        </p>
                <p>
            <b><code>description</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
                <input type="text"
               name="description"
               data-endpoint="PUTapi-allergies--id-"
               data-component="body"  hidden>
    <br>
<p>The new description of the allergy</p>        </p>
    
    </form>

    <h3>Response</h3>
    <h4 class="fancy-heading-panel"><b>Response Fields</b></h4>
            <p>
            <b><code>id</code></b>&nbsp;&nbsp;  &nbsp;
<br>
<p>The id of the newly created allergy</p>        </p>
            <p>
            <b><code>title</code></b>&nbsp;&nbsp;  &nbsp;
<br>
<p>The title of the allergy</p>        </p>
            <p>
            <b><code>description</code></b>&nbsp;&nbsp;  &nbsp;
<br>
<p>The description of the allergy</p>        </p>
            <p>
            <b><code>meals</code></b>&nbsp;&nbsp;  &nbsp;
<br>
<p>The url to get allergy meals</p>        </p>
            <p>
            <b><code>created_at</code></b>&nbsp;&nbsp;  &nbsp;
<br>
<p>Timestamp allergy was created</p>        </p>
            <p>
            <b><code>updated_at</code></b>&nbsp;&nbsp;  &nbsp;
<br>
<p>Timestamp allergy was last updated</p>        </p>
            <p>
            <b><code>deleted_at</code></b>&nbsp;&nbsp;  &nbsp;
<br>
<p>Timestamp allergy was trashed</p>        </p>
                <h2 id="allergy-endpoints-DELETEapi-allergies--id-">DELETE api/allergies/{id}</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>Remove the specified allergy from storage.</p>

<span id="example-requests-DELETEapi-allergies--id-">
<blockquote>Example request:</blockquote>


<pre><code class="language-bash">curl --request DELETE \
    "http://localhost:8000/api/allergies/3" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre>

<pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/allergies/3"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre>
</span>

<span id="example-responses-DELETEapi-allergies--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;data&quot;: {
        &quot;id&quot;: null,
        &quot;title&quot;: null,
        &quot;description&quot;: null,
        &quot;created_at&quot;: null,
        &quot;updated_at&quot;: null,
        &quot;deleted_at&quot;: null,
        &quot;links&quot;: {
            &quot;meals&quot;: &quot;http:\/\/localhost:8000\/api\/allergies\/\/meals\/&quot;
        }
    }
}</code>
 </pre>
    </span>
<span id="execution-results-DELETEapi-allergies--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-allergies--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-allergies--id-"></code></pre>
</span>
<span id="execution-error-DELETEapi-allergies--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-allergies--id-"></code></pre>
</span>
<form id="form-DELETEapi-allergies--id-" data-method="DELETE"
      data-path="api/allergies/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-allergies--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-allergies--id-"
                    onclick="tryItOut('DELETEapi-allergies--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-allergies--id-"
                    onclick="cancelTryOut('DELETEapi-allergies--id-');" hidden>Cancel
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-allergies--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/allergies/{id}</code></b>
        </p>
                <p>
            <label id="auth-DELETEapi-allergies--id-" hidden>Authorization header:
                <b><code>Bearer </code></b><input type="text"
                                                                name="Authorization"
                                                                data-prefix="Bearer "
                                                                data-endpoint="DELETEapi-allergies--id-"
                                                                data-component="header"></label>
        </p>
                <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="id"
               data-endpoint="DELETEapi-allergies--id-"
               data-component="url" required  hidden>
    <br>
<p>The ID of the allergy.</p>            </p>
                    </form>

    <h3>Response</h3>
    <h4 class="fancy-heading-panel"><b>Response Fields</b></h4>
            <p>
            <b><code>id</code></b>&nbsp;&nbsp;  &nbsp;
<br>
<p>The id of the newly created allergy</p>        </p>
            <p>
            <b><code>title</code></b>&nbsp;&nbsp;  &nbsp;
<br>
<p>The title of the allergy</p>        </p>
            <p>
            <b><code>description</code></b>&nbsp;&nbsp;  &nbsp;
<br>
<p>The description of the allergy</p>        </p>
            <p>
            <b><code>meals</code></b>&nbsp;&nbsp;  &nbsp;
<br>
<p>The url to get allergy meals</p>        </p>
            <p>
            <b><code>created_at</code></b>&nbsp;&nbsp;  &nbsp;
<br>
<p>Timestamp allergy was created</p>        </p>
            <p>
            <b><code>updated_at</code></b>&nbsp;&nbsp;  &nbsp;
<br>
<p>Timestamp allergy was last updated</p>        </p>
            <p>
            <b><code>deleted_at</code></b>&nbsp;&nbsp;  &nbsp;
<br>
<p>Timestamp allergy was trashed</p>        </p>
            <h1 id="auth-endpoints">Auth Endpoints</h1>

    <p>API Endpoints for authentication</p>

            <h2 id="auth-endpoints-POSTapi-register">POST api/register</h2>

<p>
</p>



<span id="example-requests-POSTapi-register">
<blockquote>Example request:</blockquote>


<pre><code class="language-bash">curl --request POST \
    "http://localhost:8000/api/register" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"name\": \"nostrum\",
    \"email\": \"illum\",
    \"password\": \"autem\"
}"
</code></pre>

<pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/register"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "nostrum",
    "email": "illum",
    "password": "autem"
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre>
</span>

<span id="example-responses-POSTapi-register">
</span>
<span id="execution-results-POSTapi-register" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-register"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-register"></code></pre>
</span>
<span id="execution-error-POSTapi-register" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-register"></code></pre>
</span>
<form id="form-POSTapi-register" data-method="POST"
      data-path="api/register"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-register', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-register"
                    onclick="tryItOut('POSTapi-register');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-register"
                    onclick="cancelTryOut('POSTapi-register');" hidden>Cancel
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-register" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/register</code></b>
        </p>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <p>
            <b><code>name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="name"
               data-endpoint="POSTapi-register"
               data-component="body" required  hidden>
    <br>
        </p>
                <p>
            <b><code>email</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="email"
               data-endpoint="POSTapi-register"
               data-component="body" required  hidden>
    <br>
        </p>
                <p>
            <b><code>password</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="password"
               data-endpoint="POSTapi-register"
               data-component="body" required  hidden>
    <br>
        </p>
    
    </form>

            <h2 id="auth-endpoints-POSTapi-login">POST api/login</h2>

<p>
</p>



<span id="example-requests-POSTapi-login">
<blockquote>Example request:</blockquote>


<pre><code class="language-bash">curl --request POST \
    "http://localhost:8000/api/login" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"email\": \"debitis\",
    \"password\": \"qui\"
}"
</code></pre>

<pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/login"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "email": "debitis",
    "password": "qui"
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre>
</span>

<span id="example-responses-POSTapi-login">
</span>
<span id="execution-results-POSTapi-login" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-login"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-login"></code></pre>
</span>
<span id="execution-error-POSTapi-login" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-login"></code></pre>
</span>
<form id="form-POSTapi-login" data-method="POST"
      data-path="api/login"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-login', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-login"
                    onclick="tryItOut('POSTapi-login');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-login"
                    onclick="cancelTryOut('POSTapi-login');" hidden>Cancel
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-login" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/login</code></b>
        </p>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <p>
            <b><code>email</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="email"
               data-endpoint="POSTapi-login"
               data-component="body" required  hidden>
    <br>
        </p>
                <p>
            <b><code>password</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="password"
               data-endpoint="POSTapi-login"
               data-component="body" required  hidden>
    <br>
        </p>
    
    </form>

            <h2 id="auth-endpoints-POSTapi-logout">POST api/logout</h2>

<p>
</p>



<span id="example-requests-POSTapi-logout">
<blockquote>Example request:</blockquote>


<pre><code class="language-bash">curl --request POST \
    "http://localhost:8000/api/logout" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre>

<pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/logout"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers,
}).then(response =&gt; response.json());</code></pre>
</span>

<span id="example-responses-POSTapi-logout">
</span>
<span id="execution-results-POSTapi-logout" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-logout"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-logout"></code></pre>
</span>
<span id="execution-error-POSTapi-logout" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-logout"></code></pre>
</span>
<form id="form-POSTapi-logout" data-method="POST"
      data-path="api/logout"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-logout', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-logout"
                    onclick="tryItOut('POSTapi-logout');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-logout"
                    onclick="cancelTryOut('POSTapi-logout');" hidden>Cancel
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-logout" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/logout</code></b>
        </p>
                    </form>

        <h1 id="item-endpoints">Item Endpoints</h1>

    <p>API Endpoints for managing items</p>

            <h2 id="item-endpoints-GETapi-items">GET api/items</h2>

<p>
</p>

<p>Display a listing of items.</p>

<span id="example-requests-GETapi-items">
<blockquote>Example request:</blockquote>


<pre><code class="language-bash">curl --request GET \
    --get "http://localhost:8000/api/items" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre>

<pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/items"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
</span>

<span id="example-responses-GETapi-items">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;data&quot;: [
        {
            &quot;id&quot;: 119,
            &quot;title&quot;: &quot;Culpa.&quot;,
            &quot;description&quot;: &quot;Reiciendis commodi minima.&quot;,
            &quot;created_at&quot;: &quot;2021-08-05T13:59:55.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2021-08-05T13:59:55.000000Z&quot;,
            &quot;deleted_at&quot;: null
        },
        {
            &quot;id&quot;: 120,
            &quot;title&quot;: &quot;Sit.&quot;,
            &quot;description&quot;: &quot;Vel quidem soluta cupiditate quia.&quot;,
            &quot;created_at&quot;: &quot;2021-08-05T13:59:55.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2021-08-05T13:59:55.000000Z&quot;,
            &quot;deleted_at&quot;: null
        }
    ],
    &quot;links&quot;: {
        &quot;first&quot;: &quot;\/?page=1&quot;,
        &quot;last&quot;: &quot;\/?page=1&quot;,
        &quot;prev&quot;: null,
        &quot;next&quot;: null
    },
    &quot;meta&quot;: {
        &quot;current_page&quot;: 1,
        &quot;from&quot;: 1,
        &quot;last_page&quot;: 1,
        &quot;links&quot;: [
            {
                &quot;url&quot;: null,
                &quot;label&quot;: &quot;&amp;laquo; Previous&quot;,
                &quot;active&quot;: false
            },
            {
                &quot;url&quot;: &quot;\/?page=1&quot;,
                &quot;label&quot;: &quot;1&quot;,
                &quot;active&quot;: true
            },
            {
                &quot;url&quot;: null,
                &quot;label&quot;: &quot;Next &amp;raquo;&quot;,
                &quot;active&quot;: false
            }
        ],
        &quot;path&quot;: &quot;\/&quot;,
        &quot;per_page&quot;: &quot;10&quot;,
        &quot;to&quot;: 2,
        &quot;total&quot;: 2
    }
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-items" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-items"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-items"></code></pre>
</span>
<span id="execution-error-GETapi-items" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-items"></code></pre>
</span>
<form id="form-GETapi-items" data-method="GET"
      data-path="api/items"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-items', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-items"
                    onclick="tryItOut('GETapi-items');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-items"
                    onclick="cancelTryOut('GETapi-items');" hidden>Cancel
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-items" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/items</code></b>
        </p>
                    </form>

    <h3>Response</h3>
    <h4 class="fancy-heading-panel"><b>Response Fields</b></h4>
            <p>
            <b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<br>
<p>The id of the item</p>        </p>
            <p>
            <b><code>title</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<br>
<p>The name of the title</p>        </p>
            <p>
            <b><code>description</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<br>
<p>The description of the title</p>        </p>
            <p>
            <b><code>created_at</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<br>
<p>Timestamp title was created</p>        </p>
            <p>
            <b><code>updated_at</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<br>
<p>Timestamp title was last updated</p>        </p>
            <p>
            <b><code>deleted_at</code></b>&nbsp;&nbsp;  &nbsp;
<br>
<p>Timestamp title was trashed</p>        </p>
                <h2 id="item-endpoints-GETapi-items--id-">GET api/items/{id}</h2>

<p>
</p>

<p>Display the specified item.</p>

<span id="example-requests-GETapi-items--id-">
<blockquote>Example request:</blockquote>


<pre><code class="language-bash">curl --request GET \
    --get "http://localhost:8000/api/items/7" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre>

<pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/items/7"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
</span>

<span id="example-responses-GETapi-items--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;data&quot;: {
        &quot;id&quot;: 121,
        &quot;title&quot;: &quot;Id aut.&quot;,
        &quot;description&quot;: &quot;Velit non mollitia sequi.&quot;,
        &quot;created_at&quot;: &quot;2021-08-05T13:59:55.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2021-08-05T13:59:55.000000Z&quot;,
        &quot;deleted_at&quot;: null
    }
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-items--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-items--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-items--id-"></code></pre>
</span>
<span id="execution-error-GETapi-items--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-items--id-"></code></pre>
</span>
<form id="form-GETapi-items--id-" data-method="GET"
      data-path="api/items/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-items--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-items--id-"
                    onclick="tryItOut('GETapi-items--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-items--id-"
                    onclick="cancelTryOut('GETapi-items--id-');" hidden>Cancel
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-items--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/items/{id}</code></b>
        </p>
                    <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="id"
               data-endpoint="GETapi-items--id-"
               data-component="url" required  hidden>
    <br>
<p>The ID of the item.</p>            </p>
                    </form>

    <h3>Response</h3>
    <h4 class="fancy-heading-panel"><b>Response Fields</b></h4>
            <p>
            <b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<br>
<p>The id of the item</p>        </p>
            <p>
            <b><code>title</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<br>
<p>The title of the item</p>        </p>
            <p>
            <b><code>description</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<br>
<p>The description of the item</p>        </p>
            <p>
            <b><code>created_at</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<br>
<p>Timestamp item was created</p>        </p>
            <p>
            <b><code>updated_at</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<br>
<p>Timestamp item was last updated</p>        </p>
            <p>
            <b><code>deleted_at</code></b>&nbsp;&nbsp;  &nbsp;
<br>
<p>Timestamp item was trashed</p>        </p>
                <h2 id="item-endpoints-POSTapi-items">POST api/items</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>Store a newly created item in storage.</p>

<span id="example-requests-POSTapi-items">
<blockquote>Example request:</blockquote>


<pre><code class="language-bash">curl --request POST \
    "http://localhost:8000/api/items" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"title\": \"voluptatem\",
    \"description\": \"perferendis\"
}"
</code></pre>

<pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/items"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "title": "voluptatem",
    "description": "perferendis"
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre>
</span>

<span id="example-responses-POSTapi-items">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;data&quot;: {
        &quot;id&quot;: 124,
        &quot;title&quot;: &quot;Facere.&quot;,
        &quot;description&quot;: &quot;Placeat vel nulla quo.&quot;,
        &quot;created_at&quot;: &quot;2021-08-05T13:59:55.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2021-08-05T13:59:55.000000Z&quot;,
        &quot;deleted_at&quot;: null
    }
}</code>
 </pre>
    </span>
<span id="execution-results-POSTapi-items" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-items"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-items"></code></pre>
</span>
<span id="execution-error-POSTapi-items" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-items"></code></pre>
</span>
<form id="form-POSTapi-items" data-method="POST"
      data-path="api/items"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-items', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-items"
                    onclick="tryItOut('POSTapi-items');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-items"
                    onclick="cancelTryOut('POSTapi-items');" hidden>Cancel
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-items" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/items</code></b>
        </p>
                <p>
            <label id="auth-POSTapi-items" hidden>Authorization header:
                <b><code>Bearer </code></b><input type="text"
                                                                name="Authorization"
                                                                data-prefix="Bearer "
                                                                data-endpoint="POSTapi-items"
                                                                data-component="header"></label>
        </p>
                        <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <p>
            <b><code>title</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="title"
               data-endpoint="POSTapi-items"
               data-component="body" required  hidden>
    <br>
<p>The title of the meal</p>        </p>
                <p>
            <b><code>description</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
                <input type="text"
               name="description"
               data-endpoint="POSTapi-items"
               data-component="body"  hidden>
    <br>
<p>The description of the meal</p>        </p>
    
    </form>

    <h3>Response</h3>
    <h4 class="fancy-heading-panel"><b>Response Fields</b></h4>
            <p>
            <b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<br>
<p>The id of the item</p>        </p>
            <p>
            <b><code>title</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<br>
<p>The title of the item</p>        </p>
            <p>
            <b><code>description</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<br>
<p>The description of the item</p>        </p>
            <p>
            <b><code>created_at</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<br>
<p>Timestamp item was created</p>        </p>
            <p>
            <b><code>updated_at</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<br>
<p>Timestamp item was last updated</p>        </p>
            <p>
            <b><code>deleted_at</code></b>&nbsp;&nbsp;  &nbsp;
<br>
<p>Timestamp item was trashed</p>        </p>
                <h2 id="item-endpoints-PUTapi-items--id-">PUT api/items/{id}</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>Update the specified item in storage.</p>

<span id="example-requests-PUTapi-items--id-">
<blockquote>Example request:</blockquote>


<pre><code class="language-bash">curl --request PUT \
    "http://localhost:8000/api/items/17" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"title\": \"id\",
    \"description\": \"dolores\"
}"
</code></pre>

<pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/items/17"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "title": "id",
    "description": "dolores"
}

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre>
</span>

<span id="example-responses-PUTapi-items--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;data&quot;: {
        &quot;id&quot;: 125,
        &quot;title&quot;: &quot;Et.&quot;,
        &quot;description&quot;: &quot;Voluptates et quis voluptas.&quot;,
        &quot;created_at&quot;: &quot;2021-08-05T13:59:55.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2021-08-05T13:59:55.000000Z&quot;,
        &quot;deleted_at&quot;: null
    }
}</code>
 </pre>
    </span>
<span id="execution-results-PUTapi-items--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTapi-items--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-items--id-"></code></pre>
</span>
<span id="execution-error-PUTapi-items--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-items--id-"></code></pre>
</span>
<form id="form-PUTapi-items--id-" data-method="PUT"
      data-path="api/items/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTapi-items--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTapi-items--id-"
                    onclick="tryItOut('PUTapi-items--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTapi-items--id-"
                    onclick="cancelTryOut('PUTapi-items--id-');" hidden>Cancel
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTapi-items--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>api/items/{id}</code></b>
        </p>
            <p>
            <small class="badge badge-purple">PATCH</small>
            <b><code>api/items/{id}</code></b>
        </p>
                <p>
            <label id="auth-PUTapi-items--id-" hidden>Authorization header:
                <b><code>Bearer </code></b><input type="text"
                                                                name="Authorization"
                                                                data-prefix="Bearer "
                                                                data-endpoint="PUTapi-items--id-"
                                                                data-component="header"></label>
        </p>
                <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="id"
               data-endpoint="PUTapi-items--id-"
               data-component="url" required  hidden>
    <br>
<p>The ID of the item.</p>            </p>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <p>
            <b><code>title</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="title"
               data-endpoint="PUTapi-items--id-"
               data-component="body" required  hidden>
    <br>
<p>The new title of the meal</p>        </p>
                <p>
            <b><code>description</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
                <input type="text"
               name="description"
               data-endpoint="PUTapi-items--id-"
               data-component="body"  hidden>
    <br>
<p>The new description of the meal</p>        </p>
    
    </form>

    <h3>Response</h3>
    <h4 class="fancy-heading-panel"><b>Response Fields</b></h4>
            <p>
            <b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<br>
<p>The id of the item</p>        </p>
            <p>
            <b><code>title</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<br>
<p>The title of the item</p>        </p>
            <p>
            <b><code>description</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<br>
<p>The description of the item</p>        </p>
            <p>
            <b><code>allergy</code></b>&nbsp;&nbsp;  &nbsp;
<br>
<p>The allergy the meal belongs to</p>        </p>
            <p>
            <b><code>items</code></b>&nbsp;&nbsp;  &nbsp;
<br>
<p>The url to get meal items</p>        </p>
            <p>
            <b><code>created_at</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<br>
<p>Timestamp item was created</p>        </p>
            <p>
            <b><code>updated_at</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<br>
<p>Timestamp item was last updated</p>        </p>
            <p>
            <b><code>deleted_at</code></b>&nbsp;&nbsp;  &nbsp;
<br>
<p>Timestamp item was trashed</p>        </p>
                <h2 id="item-endpoints-DELETEapi-items--id-">DELETE api/items/{id}</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>Remove the specified item from storage.</p>

<span id="example-requests-DELETEapi-items--id-">
<blockquote>Example request:</blockquote>


<pre><code class="language-bash">curl --request DELETE \
    "http://localhost:8000/api/items/17" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre>

<pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/items/17"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre>
</span>

<span id="example-responses-DELETEapi-items--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;data&quot;: {
        &quot;id&quot;: 126,
        &quot;title&quot;: &quot;Sequi.&quot;,
        &quot;description&quot;: &quot;Tenetur dolorum sed minima cum consequatur.&quot;,
        &quot;created_at&quot;: &quot;2021-08-05T13:59:55.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2021-08-05T13:59:55.000000Z&quot;,
        &quot;deleted_at&quot;: null
    }
}</code>
 </pre>
    </span>
<span id="execution-results-DELETEapi-items--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-items--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-items--id-"></code></pre>
</span>
<span id="execution-error-DELETEapi-items--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-items--id-"></code></pre>
</span>
<form id="form-DELETEapi-items--id-" data-method="DELETE"
      data-path="api/items/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-items--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-items--id-"
                    onclick="tryItOut('DELETEapi-items--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-items--id-"
                    onclick="cancelTryOut('DELETEapi-items--id-');" hidden>Cancel
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-items--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/items/{id}</code></b>
        </p>
                <p>
            <label id="auth-DELETEapi-items--id-" hidden>Authorization header:
                <b><code>Bearer </code></b><input type="text"
                                                                name="Authorization"
                                                                data-prefix="Bearer "
                                                                data-endpoint="DELETEapi-items--id-"
                                                                data-component="header"></label>
        </p>
                <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="id"
               data-endpoint="DELETEapi-items--id-"
               data-component="url" required  hidden>
    <br>
<p>The ID of the item.</p>            </p>
                    </form>

    <h3>Response</h3>
    <h4 class="fancy-heading-panel"><b>Response Fields</b></h4>
            <p>
            <b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<br>
<p>The id of the item</p>        </p>
            <p>
            <b><code>title</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<br>
<p>The title of the item</p>        </p>
            <p>
            <b><code>description</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<br>
<p>The description of the item</p>        </p>
            <p>
            <b><code>created_at</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<br>
<p>Timestamp item was created</p>        </p>
            <p>
            <b><code>updated_at</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<br>
<p>Timestamp item was last updated</p>        </p>
            <p>
            <b><code>deleted_at</code></b>&nbsp;&nbsp;  &nbsp;
<br>
<p>Timestamp item was trashed</p>        </p>
            <h1 id="meal-endpoints">Meal Endpoints</h1>

    <p>API Endpoints for managing meals</p>

            <h2 id="meal-endpoints-GETapi-meals">GET api/meals</h2>

<p>
</p>

<p>Display a listing of meals</p>

<span id="example-requests-GETapi-meals">
<blockquote>Example request:</blockquote>


<pre><code class="language-bash">curl --request GET \
    --get "http://localhost:8000/api/meals?page=6" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre>

<pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/meals"
);

const params = {
    "page": "6",
};
Object.keys(params)
    .forEach(key =&gt; url.searchParams.append(key, params[key]));

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
</span>

<span id="example-responses-GETapi-meals">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;data&quot;: [
        {
            &quot;id&quot;: null,
            &quot;title&quot;: &quot;Ut autem.&quot;,
            &quot;description&quot;: &quot;Adipisci et aut asperiores beatae porro eum repellat qui minus dolor cupiditate asperiores.&quot;,
            &quot;allergy&quot;: null,
            &quot;created_at&quot;: null,
            &quot;updated_at&quot;: null,
            &quot;deleted_at&quot;: null,
            &quot;links&quot;: {
                &quot;items&quot;: &quot;http:\/\/localhost:8000\/api\/meals\/\/items\/&quot;
            }
        },
        {
            &quot;id&quot;: null,
            &quot;title&quot;: &quot;Ad esse.&quot;,
            &quot;description&quot;: &quot;Aut pariatur aut eligendi qui consequatur aliquid nisi sed.&quot;,
            &quot;allergy&quot;: null,
            &quot;created_at&quot;: null,
            &quot;updated_at&quot;: null,
            &quot;deleted_at&quot;: null,
            &quot;links&quot;: {
                &quot;items&quot;: &quot;http:\/\/localhost:8000\/api\/meals\/\/items\/&quot;
            }
        }
    ],
    &quot;links&quot;: {
        &quot;first&quot;: &quot;\/?page=1&quot;,
        &quot;last&quot;: &quot;\/?page=1&quot;,
        &quot;prev&quot;: null,
        &quot;next&quot;: null
    },
    &quot;meta&quot;: {
        &quot;current_page&quot;: 1,
        &quot;from&quot;: 1,
        &quot;last_page&quot;: 1,
        &quot;links&quot;: [
            {
                &quot;url&quot;: null,
                &quot;label&quot;: &quot;&amp;laquo; Previous&quot;,
                &quot;active&quot;: false
            },
            {
                &quot;url&quot;: &quot;\/?page=1&quot;,
                &quot;label&quot;: &quot;1&quot;,
                &quot;active&quot;: true
            },
            {
                &quot;url&quot;: null,
                &quot;label&quot;: &quot;Next &amp;raquo;&quot;,
                &quot;active&quot;: false
            }
        ],
        &quot;path&quot;: &quot;\/&quot;,
        &quot;per_page&quot;: &quot;10&quot;,
        &quot;to&quot;: 2,
        &quot;total&quot;: 2
    }
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-meals" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-meals"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-meals"></code></pre>
</span>
<span id="execution-error-GETapi-meals" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-meals"></code></pre>
</span>
<form id="form-GETapi-meals" data-method="GET"
      data-path="api/meals"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-meals', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-meals"
                    onclick="tryItOut('GETapi-meals');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-meals"
                    onclick="cancelTryOut('GETapi-meals');" hidden>Cancel
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-meals" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/meals</code></b>
        </p>
                        <h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
                    <p>
                <b><code>page</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
                <input type="number"
               name="page"
               data-endpoint="GETapi-meals"
               data-component="query"  hidden>
    <br>
<p>Page number to show.</p>            </p>
                </form>

    <h3>Response</h3>
    <h4 class="fancy-heading-panel"><b>Response Fields</b></h4>
            <p>
            <b><code>id</code></b>&nbsp;&nbsp;  &nbsp;
<br>
<p>The id of the meal</p>        </p>
            <p>
            <b><code>title</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<br>
<p>The title of the meal</p>        </p>
            <p>
            <b><code>description</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<br>
<p>The description of the meal</p>        </p>
            <p>
            <b><code>allergy</code></b>&nbsp;&nbsp;  &nbsp;
<br>
<p>The allergy the meal belongs to</p>        </p>
            <p>
            <b><code>items</code></b>&nbsp;&nbsp;  &nbsp;
<br>
<p>The url to get meal items</p>        </p>
            <p>
            <b><code>created_at</code></b>&nbsp;&nbsp;  &nbsp;
<br>
<p>Timestamp meal was created</p>        </p>
            <p>
            <b><code>updated_at</code></b>&nbsp;&nbsp;  &nbsp;
<br>
<p>Timestamp meal was last updated</p>        </p>
            <p>
            <b><code>deleted_at</code></b>&nbsp;&nbsp;  &nbsp;
<br>
<p>Timestamp meal was trashed</p>        </p>
                <h2 id="meal-endpoints-GETapi-meals--id-">GET api/meals/{id}</h2>

<p>
</p>

<p>Display the specified meal.</p>

<span id="example-requests-GETapi-meals--id-">
<blockquote>Example request:</blockquote>


<pre><code class="language-bash">curl --request GET \
    --get "http://localhost:8000/api/meals/4" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre>

<pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/meals/4"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
</span>

<span id="example-responses-GETapi-meals--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;data&quot;: {
        &quot;id&quot;: null,
        &quot;title&quot;: &quot;Dolore.&quot;,
        &quot;description&quot;: &quot;Cum consequuntur pariatur culpa eos sit dolorem et at explicabo.&quot;,
        &quot;allergy&quot;: null,
        &quot;created_at&quot;: null,
        &quot;updated_at&quot;: null,
        &quot;deleted_at&quot;: null,
        &quot;links&quot;: {
            &quot;items&quot;: &quot;http:\/\/localhost:8000\/api\/meals\/\/items\/&quot;
        }
    }
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-meals--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-meals--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-meals--id-"></code></pre>
</span>
<span id="execution-error-GETapi-meals--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-meals--id-"></code></pre>
</span>
<form id="form-GETapi-meals--id-" data-method="GET"
      data-path="api/meals/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-meals--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-meals--id-"
                    onclick="tryItOut('GETapi-meals--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-meals--id-"
                    onclick="cancelTryOut('GETapi-meals--id-');" hidden>Cancel
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-meals--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/meals/{id}</code></b>
        </p>
                    <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="id"
               data-endpoint="GETapi-meals--id-"
               data-component="url" required  hidden>
    <br>
<p>The ID of the meal.</p>            </p>
                    </form>

    <h3>Response</h3>
    <h4 class="fancy-heading-panel"><b>Response Fields</b></h4>
            <p>
            <b><code>id</code></b>&nbsp;&nbsp;  &nbsp;
<br>
<p>The id of the meal</p>        </p>
            <p>
            <b><code>title</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<br>
<p>The title of the meal</p>        </p>
            <p>
            <b><code>description</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<br>
<p>The description of the meal</p>        </p>
            <p>
            <b><code>allergy</code></b>&nbsp;&nbsp;  &nbsp;
<br>
<p>The allergy the meal belongs to</p>        </p>
            <p>
            <b><code>items</code></b>&nbsp;&nbsp;  &nbsp;
<br>
<p>The url to get meal items</p>        </p>
            <p>
            <b><code>created_at</code></b>&nbsp;&nbsp;  &nbsp;
<br>
<p>Timestamp meal was created</p>        </p>
            <p>
            <b><code>updated_at</code></b>&nbsp;&nbsp;  &nbsp;
<br>
<p>Timestamp meal was last updated</p>        </p>
            <p>
            <b><code>deleted_at</code></b>&nbsp;&nbsp;  &nbsp;
<br>
<p>Timestamp meal was trashed</p>        </p>
                <h2 id="meal-endpoints-GETapi-meals--meal--items">GET api/meals/{id}/items</h2>

<p>
</p>

<p>Get items for the specified meal from storage</p>

<span id="example-requests-GETapi-meals--meal--items">
<blockquote>Example request:</blockquote>


<pre><code class="language-bash">curl --request GET \
    --get "http://localhost:8000/api/meals/17/items" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre>

<pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/meals/17/items"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
</span>

<span id="example-responses-GETapi-meals--meal--items">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;data&quot;: [
        {
            &quot;id&quot;: 122,
            &quot;title&quot;: &quot;Ut qui.&quot;,
            &quot;description&quot;: &quot;Amet architecto asperiores non velit.&quot;,
            &quot;created_at&quot;: &quot;2021-08-05T13:59:55.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2021-08-05T13:59:55.000000Z&quot;,
            &quot;deleted_at&quot;: null
        },
        {
            &quot;id&quot;: 123,
            &quot;title&quot;: &quot;Eius.&quot;,
            &quot;description&quot;: &quot;Officia ullam ullam alias.&quot;,
            &quot;created_at&quot;: &quot;2021-08-05T13:59:55.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2021-08-05T13:59:55.000000Z&quot;,
            &quot;deleted_at&quot;: null
        }
    ],
    &quot;links&quot;: {
        &quot;first&quot;: &quot;\/?page=1&quot;,
        &quot;last&quot;: &quot;\/?page=1&quot;,
        &quot;prev&quot;: null,
        &quot;next&quot;: null
    },
    &quot;meta&quot;: {
        &quot;current_page&quot;: 1,
        &quot;from&quot;: 1,
        &quot;last_page&quot;: 1,
        &quot;links&quot;: [
            {
                &quot;url&quot;: null,
                &quot;label&quot;: &quot;&amp;laquo; Previous&quot;,
                &quot;active&quot;: false
            },
            {
                &quot;url&quot;: &quot;\/?page=1&quot;,
                &quot;label&quot;: &quot;1&quot;,
                &quot;active&quot;: true
            },
            {
                &quot;url&quot;: null,
                &quot;label&quot;: &quot;Next &amp;raquo;&quot;,
                &quot;active&quot;: false
            }
        ],
        &quot;path&quot;: &quot;\/&quot;,
        &quot;per_page&quot;: &quot;10&quot;,
        &quot;to&quot;: 2,
        &quot;total&quot;: 2
    }
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-meals--meal--items" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-meals--meal--items"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-meals--meal--items"></code></pre>
</span>
<span id="execution-error-GETapi-meals--meal--items" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-meals--meal--items"></code></pre>
</span>
<form id="form-GETapi-meals--meal--items" data-method="GET"
      data-path="api/meals/{meal}/items"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-meals--meal--items', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-meals--meal--items"
                    onclick="tryItOut('GETapi-meals--meal--items');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-meals--meal--items"
                    onclick="cancelTryOut('GETapi-meals--meal--items');" hidden>Cancel
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-meals--meal--items" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/meals/{meal}/items</code></b>
        </p>
                    <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>meal</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="meal"
               data-endpoint="GETapi-meals--meal--items"
               data-component="url" required  hidden>
    <br>
            </p>
                    </form>

    <h3>Response</h3>
    <h4 class="fancy-heading-panel"><b>Response Fields</b></h4>
            <p>
            <b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<br>
<p>The id of the item</p>        </p>
            <p>
            <b><code>title</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<br>
<p>The title of the item</p>        </p>
            <p>
            <b><code>description</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<br>
<p>The description of the item</p>        </p>
            <p>
            <b><code>created_at</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<br>
<p>Timestamp item was created</p>        </p>
            <p>
            <b><code>updated_at</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<br>
<p>Timestamp item was last updated</p>        </p>
            <p>
            <b><code>deleted_at</code></b>&nbsp;&nbsp;  &nbsp;
<br>
<p>Timestamp item was trashed</p>        </p>
                <h2 id="meal-endpoints-POSTapi-meals">POST api/meals</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>Store a newly created meal in storage.</p>

<span id="example-requests-POSTapi-meals">
<blockquote>Example request:</blockquote>


<pre><code class="language-bash">curl --request POST \
    "http://localhost:8000/api/meals" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"allergy\": \"error\",
    \"title\": \"quis\",
    \"description\": \"debitis\"
}"
</code></pre>

<pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/meals"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "allergy": "error",
    "title": "quis",
    "description": "debitis"
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre>
</span>

<span id="example-responses-POSTapi-meals">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;data&quot;: {
        &quot;id&quot;: null,
        &quot;title&quot;: &quot;Expedita.&quot;,
        &quot;description&quot;: &quot;Laborum saepe aut velit ut velit ut quis dolor non fugiat delectus quis quaerat.&quot;,
        &quot;allergy&quot;: null,
        &quot;created_at&quot;: null,
        &quot;updated_at&quot;: null,
        &quot;deleted_at&quot;: null,
        &quot;links&quot;: {
            &quot;items&quot;: &quot;http:\/\/localhost:8000\/api\/meals\/\/items\/&quot;
        }
    }
}</code>
 </pre>
    </span>
<span id="execution-results-POSTapi-meals" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-meals"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-meals"></code></pre>
</span>
<span id="execution-error-POSTapi-meals" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-meals"></code></pre>
</span>
<form id="form-POSTapi-meals" data-method="POST"
      data-path="api/meals"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-meals', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-meals"
                    onclick="tryItOut('POSTapi-meals');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-meals"
                    onclick="cancelTryOut('POSTapi-meals');" hidden>Cancel
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-meals" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/meals</code></b>
        </p>
                <p>
            <label id="auth-POSTapi-meals" hidden>Authorization header:
                <b><code>Bearer </code></b><input type="text"
                                                                name="Authorization"
                                                                data-prefix="Bearer "
                                                                data-endpoint="POSTapi-meals"
                                                                data-component="header"></label>
        </p>
                        <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <p>
            <b><code>allergy</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="allergy"
               data-endpoint="POSTapi-meals"
               data-component="body" required  hidden>
    <br>
        </p>
                <p>
            <b><code>title</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="title"
               data-endpoint="POSTapi-meals"
               data-component="body" required  hidden>
    <br>
<p>The new title of the meal</p>        </p>
                <p>
            <b><code>description</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
                <input type="text"
               name="description"
               data-endpoint="POSTapi-meals"
               data-component="body"  hidden>
    <br>
<p>The new description of the meal</p>        </p>
    
    </form>

    <h3>Response</h3>
    <h4 class="fancy-heading-panel"><b>Response Fields</b></h4>
            <p>
            <b><code>id</code></b>&nbsp;&nbsp;  &nbsp;
<br>
<p>The id of the meal</p>        </p>
            <p>
            <b><code>title</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<br>
<p>The title of the meal</p>        </p>
            <p>
            <b><code>description</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<br>
<p>The description of the meal</p>        </p>
            <p>
            <b><code>allergy</code></b>&nbsp;&nbsp;  &nbsp;
<br>
<p>The allergy the meal belongs to</p>        </p>
            <p>
            <b><code>items</code></b>&nbsp;&nbsp;  &nbsp;
<br>
<p>The url to get meal items</p>        </p>
            <p>
            <b><code>created_at</code></b>&nbsp;&nbsp;  &nbsp;
<br>
<p>Timestamp meal was created</p>        </p>
            <p>
            <b><code>updated_at</code></b>&nbsp;&nbsp;  &nbsp;
<br>
<p>Timestamp meal was last updated</p>        </p>
            <p>
            <b><code>deleted_at</code></b>&nbsp;&nbsp;  &nbsp;
<br>
<p>Timestamp meal was trashed</p>        </p>
                <h2 id="meal-endpoints-PUTapi-meals--id-">PUT api/meals/{id}</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>Update the specified resource in storage.</p>

<span id="example-requests-PUTapi-meals--id-">
<blockquote>Example request:</blockquote>


<pre><code class="language-bash">curl --request PUT \
    "http://localhost:8000/api/meals/14" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"title\": \"officia\",
    \"description\": \"a\"
}"
</code></pre>

<pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/meals/14"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "title": "officia",
    "description": "a"
}

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre>
</span>

<span id="example-responses-PUTapi-meals--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;data&quot;: {
        &quot;id&quot;: null,
        &quot;title&quot;: &quot;Inventore.&quot;,
        &quot;description&quot;: &quot;Dolores sapiente error consequatur quos recusandae et unde eos enim perspiciatis nostrum.&quot;,
        &quot;allergy&quot;: null,
        &quot;created_at&quot;: null,
        &quot;updated_at&quot;: null,
        &quot;deleted_at&quot;: null,
        &quot;links&quot;: {
            &quot;items&quot;: &quot;http:\/\/localhost:8000\/api\/meals\/\/items\/&quot;
        }
    }
}</code>
 </pre>
    </span>
<span id="execution-results-PUTapi-meals--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTapi-meals--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-meals--id-"></code></pre>
</span>
<span id="execution-error-PUTapi-meals--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-meals--id-"></code></pre>
</span>
<form id="form-PUTapi-meals--id-" data-method="PUT"
      data-path="api/meals/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTapi-meals--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTapi-meals--id-"
                    onclick="tryItOut('PUTapi-meals--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTapi-meals--id-"
                    onclick="cancelTryOut('PUTapi-meals--id-');" hidden>Cancel
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTapi-meals--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>api/meals/{id}</code></b>
        </p>
            <p>
            <small class="badge badge-purple">PATCH</small>
            <b><code>api/meals/{id}</code></b>
        </p>
                <p>
            <label id="auth-PUTapi-meals--id-" hidden>Authorization header:
                <b><code>Bearer </code></b><input type="text"
                                                                name="Authorization"
                                                                data-prefix="Bearer "
                                                                data-endpoint="PUTapi-meals--id-"
                                                                data-component="header"></label>
        </p>
                <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="id"
               data-endpoint="PUTapi-meals--id-"
               data-component="url" required  hidden>
    <br>
<p>The ID of the meal.</p>            </p>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <p>
            <b><code>title</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="title"
               data-endpoint="PUTapi-meals--id-"
               data-component="body" required  hidden>
    <br>
<p>The new title of the meal</p>        </p>
                <p>
            <b><code>description</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
                <input type="text"
               name="description"
               data-endpoint="PUTapi-meals--id-"
               data-component="body"  hidden>
    <br>
<p>The new description of the meal</p>        </p>
    
    </form>

    <h3>Response</h3>
    <h4 class="fancy-heading-panel"><b>Response Fields</b></h4>
            <p>
            <b><code>id</code></b>&nbsp;&nbsp;  &nbsp;
<br>
<p>The id of the meal</p>        </p>
            <p>
            <b><code>title</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<br>
<p>The title of the meal</p>        </p>
            <p>
            <b><code>description</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<br>
<p>The description of the meal</p>        </p>
            <p>
            <b><code>allergy</code></b>&nbsp;&nbsp;  &nbsp;
<br>
<p>The allergy the meal belongs to</p>        </p>
            <p>
            <b><code>items</code></b>&nbsp;&nbsp;  &nbsp;
<br>
<p>The url to get meal items</p>        </p>
            <p>
            <b><code>created_at</code></b>&nbsp;&nbsp;  &nbsp;
<br>
<p>Timestamp meal was created</p>        </p>
            <p>
            <b><code>updated_at</code></b>&nbsp;&nbsp;  &nbsp;
<br>
<p>Timestamp meal was last updated</p>        </p>
            <p>
            <b><code>deleted_at</code></b>&nbsp;&nbsp;  &nbsp;
<br>
<p>Timestamp meal was trashed</p>        </p>
                <h2 id="meal-endpoints-DELETEapi-meals--id-">DELETE api/meals/{id}</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>Remove the specified resource from storage.</p>

<span id="example-requests-DELETEapi-meals--id-">
<blockquote>Example request:</blockquote>


<pre><code class="language-bash">curl --request DELETE \
    "http://localhost:8000/api/meals/9" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre>

<pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/meals/9"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre>
</span>

<span id="example-responses-DELETEapi-meals--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;data&quot;: {
        &quot;id&quot;: null,
        &quot;title&quot;: &quot;Ut.&quot;,
        &quot;description&quot;: &quot;Numquam quia facere similique laborum vero molestias distinctio at labore enim.&quot;,
        &quot;allergy&quot;: null,
        &quot;created_at&quot;: null,
        &quot;updated_at&quot;: null,
        &quot;deleted_at&quot;: null,
        &quot;links&quot;: {
            &quot;items&quot;: &quot;http:\/\/localhost:8000\/api\/meals\/\/items\/&quot;
        }
    }
}</code>
 </pre>
    </span>
<span id="execution-results-DELETEapi-meals--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-meals--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-meals--id-"></code></pre>
</span>
<span id="execution-error-DELETEapi-meals--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-meals--id-"></code></pre>
</span>
<form id="form-DELETEapi-meals--id-" data-method="DELETE"
      data-path="api/meals/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-meals--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-meals--id-"
                    onclick="tryItOut('DELETEapi-meals--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-meals--id-"
                    onclick="cancelTryOut('DELETEapi-meals--id-');" hidden>Cancel
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-meals--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/meals/{id}</code></b>
        </p>
                <p>
            <label id="auth-DELETEapi-meals--id-" hidden>Authorization header:
                <b><code>Bearer </code></b><input type="text"
                                                                name="Authorization"
                                                                data-prefix="Bearer "
                                                                data-endpoint="DELETEapi-meals--id-"
                                                                data-component="header"></label>
        </p>
                <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="id"
               data-endpoint="DELETEapi-meals--id-"
               data-component="url" required  hidden>
    <br>
<p>The ID of the meal.</p>            </p>
                    </form>

    <h3>Response</h3>
    <h4 class="fancy-heading-panel"><b>Response Fields</b></h4>
            <p>
            <b><code>id</code></b>&nbsp;&nbsp;  &nbsp;
<br>
<p>The id of the meal</p>        </p>
            <p>
            <b><code>title</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<br>
<p>The title of the meal</p>        </p>
            <p>
            <b><code>description</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<br>
<p>The description of the meal</p>        </p>
            <p>
            <b><code>allergy</code></b>&nbsp;&nbsp;  &nbsp;
<br>
<p>The allergy the meal belongs to</p>        </p>
            <p>
            <b><code>items</code></b>&nbsp;&nbsp;  &nbsp;
<br>
<p>The url to get meal items</p>        </p>
            <p>
            <b><code>created_at</code></b>&nbsp;&nbsp;  &nbsp;
<br>
<p>Timestamp meal was created</p>        </p>
            <p>
            <b><code>updated_at</code></b>&nbsp;&nbsp;  &nbsp;
<br>
<p>Timestamp meal was last updated</p>        </p>
            <p>
            <b><code>deleted_at</code></b>&nbsp;&nbsp;  &nbsp;
<br>
<p>Timestamp meal was trashed</p>        </p>
            <h1 id="user-endpoints">User Endpoints</h1>

    <p>API Endpoints for managing users</p>

            <h2 id="user-endpoints-GETapi-users-allergies">GET  api/users/allergies</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>Get allergies for authenticated user</p>

<span id="example-requests-GETapi-users-allergies">
<blockquote>Example request:</blockquote>


<pre><code class="language-bash">curl --request GET \
    --get "http://localhost:8000/api/users/allergies" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre>

<pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/users/allergies"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
</span>

<span id="example-responses-GETapi-users-allergies">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;data&quot;: [
        {
            &quot;id&quot;: null,
            &quot;title&quot;: null,
            &quot;description&quot;: null,
            &quot;created_at&quot;: null,
            &quot;updated_at&quot;: null,
            &quot;deleted_at&quot;: null,
            &quot;links&quot;: {
                &quot;meals&quot;: &quot;http:\/\/localhost:8000\/api\/allergies\/\/meals\/&quot;
            }
        },
        {
            &quot;id&quot;: null,
            &quot;title&quot;: null,
            &quot;description&quot;: null,
            &quot;created_at&quot;: null,
            &quot;updated_at&quot;: null,
            &quot;deleted_at&quot;: null,
            &quot;links&quot;: {
                &quot;meals&quot;: &quot;http:\/\/localhost:8000\/api\/allergies\/\/meals\/&quot;
            }
        }
    ]
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-users-allergies" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-users-allergies"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-users-allergies"></code></pre>
</span>
<span id="execution-error-GETapi-users-allergies" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-users-allergies"></code></pre>
</span>
<form id="form-GETapi-users-allergies" data-method="GET"
      data-path="api/users/allergies"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-users-allergies', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-users-allergies"
                    onclick="tryItOut('GETapi-users-allergies');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-users-allergies"
                    onclick="cancelTryOut('GETapi-users-allergies');" hidden>Cancel
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-users-allergies" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/users/allergies</code></b>
        </p>
                <p>
            <label id="auth-GETapi-users-allergies" hidden>Authorization header:
                <b><code>Bearer </code></b><input type="text"
                                                                name="Authorization"
                                                                data-prefix="Bearer "
                                                                data-endpoint="GETapi-users-allergies"
                                                                data-component="header"></label>
        </p>
                </form>

    <h3>Response</h3>
    <h4 class="fancy-heading-panel"><b>Response Fields</b></h4>
            <p>
            <b><code>id</code></b>&nbsp;&nbsp;  &nbsp;
<br>
<p>The id of the allergy</p>        </p>
            <p>
            <b><code>title</code></b>&nbsp;&nbsp;  &nbsp;
<br>
<p>The title of the allergy</p>        </p>
            <p>
            <b><code>description</code></b>&nbsp;&nbsp;  &nbsp;
<br>
<p>The description of the allergy</p>        </p>
            <p>
            <b><code>meals</code></b>&nbsp;&nbsp;  &nbsp;
<br>
<p>The url to get allergy meals</p>        </p>
            <p>
            <b><code>created_at</code></b>&nbsp;&nbsp;  &nbsp;
<br>
<p>Timestamp allergy was created</p>        </p>
            <p>
            <b><code>updated_at</code></b>&nbsp;&nbsp;  &nbsp;
<br>
<p>Timestamp allergy was last updated</p>        </p>
            <p>
            <b><code>deleted_at</code></b>&nbsp;&nbsp;  &nbsp;
<br>
<p>Timestamp allergy was trashed</p>        </p>
                <h2 id="user-endpoints-POSTapi-users-allergies-add">GET  api/users/allergies/add</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>Add allergies for authenticated user</p>

<span id="example-requests-POSTapi-users-allergies-add">
<blockquote>Example request:</blockquote>


<pre><code class="language-bash">curl --request POST \
    "http://localhost:8000/api/users/allergies/add" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"allergies\": \"voluptatum\"
}"
</code></pre>

<pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/users/allergies/add"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "allergies": "voluptatum"
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre>
</span>

<span id="example-responses-POSTapi-users-allergies-add">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;data&quot;: [
        {
            &quot;id&quot;: null,
            &quot;title&quot;: null,
            &quot;description&quot;: null,
            &quot;created_at&quot;: null,
            &quot;updated_at&quot;: null,
            &quot;deleted_at&quot;: null,
            &quot;links&quot;: {
                &quot;meals&quot;: &quot;http:\/\/localhost:8000\/api\/allergies\/\/meals\/&quot;
            }
        },
        {
            &quot;id&quot;: null,
            &quot;title&quot;: null,
            &quot;description&quot;: null,
            &quot;created_at&quot;: null,
            &quot;updated_at&quot;: null,
            &quot;deleted_at&quot;: null,
            &quot;links&quot;: {
                &quot;meals&quot;: &quot;http:\/\/localhost:8000\/api\/allergies\/\/meals\/&quot;
            }
        }
    ]
}</code>
 </pre>
    </span>
<span id="execution-results-POSTapi-users-allergies-add" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-users-allergies-add"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-users-allergies-add"></code></pre>
</span>
<span id="execution-error-POSTapi-users-allergies-add" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-users-allergies-add"></code></pre>
</span>
<form id="form-POSTapi-users-allergies-add" data-method="POST"
      data-path="api/users/allergies/add"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-users-allergies-add', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-users-allergies-add"
                    onclick="tryItOut('POSTapi-users-allergies-add');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-users-allergies-add"
                    onclick="cancelTryOut('POSTapi-users-allergies-add');" hidden>Cancel
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-users-allergies-add" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/users/allergies/add</code></b>
        </p>
                <p>
            <label id="auth-POSTapi-users-allergies-add" hidden>Authorization header:
                <b><code>Bearer </code></b><input type="text"
                                                                name="Authorization"
                                                                data-prefix="Bearer "
                                                                data-endpoint="POSTapi-users-allergies-add"
                                                                data-component="header"></label>
        </p>
                        <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <p>
            <b><code>allergies</code></b>&nbsp;&nbsp;<small>required</small>     <i>optional</i> &nbsp;
                <input type="text"
               name="allergies"
               data-endpoint="POSTapi-users-allergies-add"
               data-component="body"  hidden>
    <br>
<p>array Array of allergy ids to add</p>        </p>
    
    </form>

    <h3>Response</h3>
    <h4 class="fancy-heading-panel"><b>Response Fields</b></h4>
            <p>
            <b><code>id</code></b>&nbsp;&nbsp;  &nbsp;
<br>
<p>The id of the allergy</p>        </p>
            <p>
            <b><code>title</code></b>&nbsp;&nbsp;  &nbsp;
<br>
<p>The title of the allergy</p>        </p>
            <p>
            <b><code>description</code></b>&nbsp;&nbsp;  &nbsp;
<br>
<p>The description of the allergy</p>        </p>
            <p>
            <b><code>meals</code></b>&nbsp;&nbsp;  &nbsp;
<br>
<p>The url to get allergy meals</p>        </p>
            <p>
            <b><code>created_at</code></b>&nbsp;&nbsp;  &nbsp;
<br>
<p>Timestamp allergy was created</p>        </p>
            <p>
            <b><code>updated_at</code></b>&nbsp;&nbsp;  &nbsp;
<br>
<p>Timestamp allergy was last updated</p>        </p>
            <p>
            <b><code>deleted_at</code></b>&nbsp;&nbsp;  &nbsp;
<br>
<p>Timestamp allergy was trashed</p>        </p>
                <h2 id="user-endpoints-POSTapi-users-allergies-remove">GET  api/users/allergies/remove</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>Remove allergies for authenticated user</p>

<span id="example-requests-POSTapi-users-allergies-remove">
<blockquote>Example request:</blockquote>


<pre><code class="language-bash">curl --request POST \
    "http://localhost:8000/api/users/allergies/remove" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"allergies\": \"assumenda\"
}"
</code></pre>

<pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/users/allergies/remove"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "allergies": "assumenda"
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre>
</span>

<span id="example-responses-POSTapi-users-allergies-remove">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;data&quot;: [
        {
            &quot;id&quot;: null,
            &quot;title&quot;: null,
            &quot;description&quot;: null,
            &quot;created_at&quot;: null,
            &quot;updated_at&quot;: null,
            &quot;deleted_at&quot;: null,
            &quot;links&quot;: {
                &quot;meals&quot;: &quot;http:\/\/localhost:8000\/api\/allergies\/\/meals\/&quot;
            }
        },
        {
            &quot;id&quot;: null,
            &quot;title&quot;: null,
            &quot;description&quot;: null,
            &quot;created_at&quot;: null,
            &quot;updated_at&quot;: null,
            &quot;deleted_at&quot;: null,
            &quot;links&quot;: {
                &quot;meals&quot;: &quot;http:\/\/localhost:8000\/api\/allergies\/\/meals\/&quot;
            }
        }
    ]
}</code>
 </pre>
    </span>
<span id="execution-results-POSTapi-users-allergies-remove" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-users-allergies-remove"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-users-allergies-remove"></code></pre>
</span>
<span id="execution-error-POSTapi-users-allergies-remove" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-users-allergies-remove"></code></pre>
</span>
<form id="form-POSTapi-users-allergies-remove" data-method="POST"
      data-path="api/users/allergies/remove"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-users-allergies-remove', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-users-allergies-remove"
                    onclick="tryItOut('POSTapi-users-allergies-remove');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-users-allergies-remove"
                    onclick="cancelTryOut('POSTapi-users-allergies-remove');" hidden>Cancel
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-users-allergies-remove" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/users/allergies/remove</code></b>
        </p>
                <p>
            <label id="auth-POSTapi-users-allergies-remove" hidden>Authorization header:
                <b><code>Bearer </code></b><input type="text"
                                                                name="Authorization"
                                                                data-prefix="Bearer "
                                                                data-endpoint="POSTapi-users-allergies-remove"
                                                                data-component="header"></label>
        </p>
                        <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <p>
            <b><code>allergies</code></b>&nbsp;&nbsp;<small>required</small>     <i>optional</i> &nbsp;
                <input type="text"
               name="allergies"
               data-endpoint="POSTapi-users-allergies-remove"
               data-component="body"  hidden>
    <br>
<p>array Array of allergy ids to remove</p>        </p>
    
    </form>

    <h3>Response</h3>
    <h4 class="fancy-heading-panel"><b>Response Fields</b></h4>
            <p>
            <b><code>id</code></b>&nbsp;&nbsp;  &nbsp;
<br>
<p>The id of the allergy</p>        </p>
            <p>
            <b><code>title</code></b>&nbsp;&nbsp;  &nbsp;
<br>
<p>The title of the allergy</p>        </p>
            <p>
            <b><code>description</code></b>&nbsp;&nbsp;  &nbsp;
<br>
<p>The description of the allergy</p>        </p>
            <p>
            <b><code>meals</code></b>&nbsp;&nbsp;  &nbsp;
<br>
<p>The url to get allergy meals</p>        </p>
            <p>
            <b><code>created_at</code></b>&nbsp;&nbsp;  &nbsp;
<br>
<p>Timestamp allergy was created</p>        </p>
            <p>
            <b><code>updated_at</code></b>&nbsp;&nbsp;  &nbsp;
<br>
<p>Timestamp allergy was last updated</p>        </p>
            <p>
            <b><code>deleted_at</code></b>&nbsp;&nbsp;  &nbsp;
<br>
<p>Timestamp allergy was trashed</p>        </p>
                <h2 id="user-endpoints-GETapi-users-allergies-meals">GET api/users/allergies/meals</h2>

<p>
</p>

<p>Get Meal Recommendations</p>

<span id="example-requests-GETapi-users-allergies-meals">
<blockquote>Example request:</blockquote>


<pre><code class="language-bash">curl --request GET \
    --get "http://localhost:8000/api/users/allergies/meals" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre>

<pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/users/allergies/meals"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
</span>

<span id="example-responses-GETapi-users-allergies-meals">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;data&quot;: [
        {
            &quot;id&quot;: null,
            &quot;title&quot;: &quot;Libero.&quot;,
            &quot;description&quot;: &quot;Voluptatem rerum dignissimos placeat ducimus dolores facilis alias officiis exercitationem est.&quot;,
            &quot;allergy&quot;: null,
            &quot;created_at&quot;: null,
            &quot;updated_at&quot;: null,
            &quot;deleted_at&quot;: null,
            &quot;links&quot;: {
                &quot;items&quot;: &quot;http:\/\/localhost:8000\/api\/meals\/\/items\/&quot;
            }
        },
        {
            &quot;id&quot;: null,
            &quot;title&quot;: &quot;Iste.&quot;,
            &quot;description&quot;: &quot;Est magni non aperiam error repudiandae et qui ut molestias occaecati eaque.&quot;,
            &quot;allergy&quot;: null,
            &quot;created_at&quot;: null,
            &quot;updated_at&quot;: null,
            &quot;deleted_at&quot;: null,
            &quot;links&quot;: {
                &quot;items&quot;: &quot;http:\/\/localhost:8000\/api\/meals\/\/items\/&quot;
            }
        }
    ]
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-users-allergies-meals" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-users-allergies-meals"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-users-allergies-meals"></code></pre>
</span>
<span id="execution-error-GETapi-users-allergies-meals" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-users-allergies-meals"></code></pre>
</span>
<form id="form-GETapi-users-allergies-meals" data-method="GET"
      data-path="api/users/allergies/meals"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-users-allergies-meals', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-users-allergies-meals"
                    onclick="tryItOut('GETapi-users-allergies-meals');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-users-allergies-meals"
                    onclick="cancelTryOut('GETapi-users-allergies-meals');" hidden>Cancel
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-users-allergies-meals" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/users/allergies/meals</code></b>
        </p>
                    </form>

    <h3>Response</h3>
    <h4 class="fancy-heading-panel"><b>Response Fields</b></h4>
            <p>
            <b><code>id</code></b>&nbsp;&nbsp;  &nbsp;
<br>
<p>The id of the meal</p>        </p>
            <p>
            <b><code>title</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<br>
<p>The title of the meal</p>        </p>
            <p>
            <b><code>description</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<br>
<p>The description of the meal</p>        </p>
            <p>
            <b><code>allergy</code></b>&nbsp;&nbsp;  &nbsp;
<br>
<p>The allergy the meal belongs to</p>        </p>
            <p>
            <b><code>items</code></b>&nbsp;&nbsp;  &nbsp;
<br>
<p>The url to get meal items</p>        </p>
            <p>
            <b><code>created_at</code></b>&nbsp;&nbsp;  &nbsp;
<br>
<p>Timestamp meal was created</p>        </p>
            <p>
            <b><code>updated_at</code></b>&nbsp;&nbsp;  &nbsp;
<br>
<p>Timestamp meal was last updated</p>        </p>
            <p>
            <b><code>deleted_at</code></b>&nbsp;&nbsp;  &nbsp;
<br>
<p>Timestamp meal was trashed</p>        </p>
                <h2 id="user-endpoints-GETapi-user">GET  api/user</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>Get authenticated user details</p>

<span id="example-requests-GETapi-user">
<blockquote>Example request:</blockquote>


<pre><code class="language-bash">curl --request GET \
    --get "http://localhost:8000/api/user" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre>

<pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/user"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
</span>

<span id="example-responses-GETapi-user">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary>
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre>
        </details>         <pre>

<code class="language-json">{
    &quot;message&quot;: &quot;Unauthenticated&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-user" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-user"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-user"></code></pre>
</span>
<span id="execution-error-GETapi-user" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-user"></code></pre>
</span>
<form id="form-GETapi-user" data-method="GET"
      data-path="api/user"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-user', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-user"
                    onclick="tryItOut('GETapi-user');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-user"
                    onclick="cancelTryOut('GETapi-user');" hidden>Cancel
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-user" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/user</code></b>
        </p>
                <p>
            <label id="auth-GETapi-user" hidden>Authorization header:
                <b><code>Bearer </code></b><input type="text"
                                                                name="Authorization"
                                                                data-prefix="Bearer "
                                                                data-endpoint="GETapi-user"
                                                                data-component="header"></label>
        </p>
                </form>

    <h3>Response</h3>
    <h4 class="fancy-heading-panel"><b>Response Fields</b></h4>
            <p>
            <b><code>id</code></b>&nbsp;&nbsp;  &nbsp;
<br>
<p>The id of the user</p>        </p>
            <p>
            <b><code>name</code></b>&nbsp;&nbsp;  &nbsp;
<br>
<p>The name of the user</p>        </p>
            <p>
            <b><code>email</code></b>&nbsp;&nbsp;  &nbsp;
<br>
<p>The email of the user</p>        </p>
            <p>
            <b><code>created_at</code></b>&nbsp;&nbsp;  &nbsp;
<br>
<p>Timestamp user was created</p>        </p>
            <p>
            <b><code>updated_at</code></b>&nbsp;&nbsp;  &nbsp;
<br>
<p>Timestamp user was last updated</p>        </p>
            <p>
            <b><code>deleted_at</code></b>&nbsp;&nbsp;  &nbsp;
<br>
<p>Timestamp user was trashed</p>        </p>
        

        
    </div>
    <div class="dark-box">
                    <div class="lang-selector">
                                    <a href="#" data-language-name="bash">bash</a>
                                    <a href="#" data-language-name="javascript">javascript</a>
                            </div>
            </div>
</div>
<script>
    $(function () {
        var exampleLanguages = ["bash","javascript"];
        setupLanguages(exampleLanguages);
    });
</script>
</body>
</html>