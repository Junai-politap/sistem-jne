<div class="offcanvas offcanvas-end" tabindex="-1" id="Appearance" aria-labelledby="AppearanceLabel">
    <div class="offcanvas-header border-bottom">
        <h5 class="m-0 font-14" id="AppearanceLabel">JNE | Terpadu</h5>
        <button type="button" class="btn-close text-reset p-0 m-0 align-self-center" data-bs-dismiss="offcanvas"
            aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        <div class="row">
            @foreach (auth()->user()->role as $role)
                <div class="col-md-6">
                    <div class="row content-center">
                        <div class="row d-flex content-center">
                            <div class="col-md-12 text-center"
                                style=" display:flex; flex-wrap: wrap; justify-content: space-between; gap:10px;">
                                <x-template.module-box color="{{ $role->module->color }}" url="{{ $role->module->url }}"
                                    title="{{ $role->module->title }}" subtitle="{{ $role->module->subtitle }}" />
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

</div>
<style>
    a {
        flex-wrap: wrap;
        justify-content: space-between;
    }
</style>
