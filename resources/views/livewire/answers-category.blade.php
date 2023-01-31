<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">{{ tr('Answer Categories') }}</h3>
    </div>
    <div class="card-body">
        <x-admin.category.table-button :route="'answers-category'" :title="'Create Answer Category'"/>
        <x-admin.category.table :params="$answers" :categories="$answersParent" :users="$users" :route="'answers-category'"/>
    </div>
</div>
