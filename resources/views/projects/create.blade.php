Skip to content
This repository
Search
Pull requests
Issues
Gist
@VlPetukhov
Sign out
Watch 6
Star 78
Fork 46 laracasts/Vue-Forms
Code  Issues 2  Pull requests 4  Projects 0  Wiki  Pulse  Graphs
Branch: master Find file Copy pathVue-Forms/resources/views/projects/create.blade.php
226fb03  on 22 Dec 2016
@JeffreyWay JeffreyWay Remove unused things
1 contributor
RawBlameHistory
41 lines (32 sloc)  1.56 KB
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.2.3/css/bulma.css">
    <style>body { padding-top: 40px; }</style>
</head>

<body>
<div id="app" class="container">
    @include ('projects.list')

    <form method="POST" action="/projects" @submit.prevent="onSubmit" @keydown="form.errors.clear($event.target.name)">
    <div class="control">
        <label for="name" class="label">Project Name:</label>

        <input type="text" id="name" name="name" class="input" v-model="form.name">

        <span class="help is-danger" v-if="form.errors.has('name')" v-text="form.errors.get('name')"></span>
    </div>

    <div class="control">
        <label for="description" class="label">Project Description:</label>

        <input type="text" id="description" name="description" class="input" v-model="form.description">

        <span class="help is-danger" v-if="form.errors.has('description')" v-text="form.errors.get('description')"></span>
    </div>

    <div class="control">
        <button class="button is-primary" :disabled="form.errors.any()">Create</button>
    </div>
    </form>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.15.3/axios.js"></script>
<script src="https://unpkg.com/vue@2.1.6/dist/vue.js"></script>
<script src="/js/app.js"></script>
</body>
</html>
Contact GitHub API Training Shop Blog About
© 2017 GitHub, Inc. Terms Privacy Security Status Help