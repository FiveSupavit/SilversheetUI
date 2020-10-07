@extends('layouts.main')
@section('page.title','Dashboard | Remark Admin Template')
@section('style')
<style>
    .btn-left::before {
        top: 30%;
        border-right-color: #ffffff;
    }
</style>
@endsection
@section('content')
    <div class="page-header">
        <div class="row row-lg">
            <div class="col-md-6 col-lg-4">
                <input type="text" class="form-control" id="inputFocus" placeholder="Search by name or NPI">
            </div>
        </div>
    </div>

    <div class="page-content container-fluid">
        <div class="row">
            <div class="col-md-6">
                <div class="examle-wrap">
                        <div class="">
                            <div class="panel-group" id="exampleAccordionDefault" aria-multiselectable="true"
                                 role="tablist">
                                <div class="panel">
                                    <div class="panel-heading" id="exampleHeadingDefaultOne" role="tab">
                                        <a class="panel-title" data-toggle="collapse" href="#exampleCollapseDefaultOne"
                                           data-parent="#exampleAccordionDefault" aria-expanded="true"
                                           aria-controls="exampleCollapseDefaultOne">
                                            Collapsible Group Item #1
                                        </a>
                                    </div>
                                    <div class="panel-collapse collapse show" id="exampleCollapseDefaultOne" aria-labelledby="exampleHeadingDefaultOne"
                                         role="tabpanel">
                                        <div class="panel-body">
                                            De moveat laudatur vestra parum doloribus labitur sentire partes, eripuit praesenti
                                            congressus ostendit alienae, voluptati ornateque accusamus
                                            clamat reperietur convicia albucius, veniat quocirca
                                            vivendi aristotele errorem epicurus. Suppetet. Aeternum
                                            animadversionis, turbent cn partem porrecta c putamus
                                            diceret decore. Vero itaque incursione.
                                        </div>
                                    </div>
                                </div>
                                <div class="panel">
                                    <div class="panel-heading" id="exampleHeadingDefaultTwo" role="tab">
                                        <a class="panel-title collapsed" data-toggle="collapse" href="#exampleCollapseDefaultTwo"
                                           data-parent="#exampleAccordionDefault" aria-expanded="false"
                                           aria-controls="exampleCollapseDefaultTwo">
                                            Collapsible Group Item #2
                                        </a>
                                    </div>
                                    <div class="panel-collapse collapse" id="exampleCollapseDefaultTwo" aria-labelledby="exampleHeadingDefaultTwo"
                                         role="tabpanel">
                                        <div class="panel-body">
                                            Praestabiliorem. Pellat excruciant legantur ullum leniter vacare foris voluptate
                                            loco ignavi, credo videretur multoque choro fatemur mortis
                                            animus adoptionem, bello statuat expediunt naturales
                                            frequenter terminari nomine, stabilitas privatio initia
                                            paranda contineri abhorreant, percipi dixerit incurreret
                                            deorsum imitarentur tenetur antiopam latinam haec.
                                        </div>
                                    </div>
                                </div>

                                <div class="panel">
                                    <div class="panel-heading" id="exampleHeadingDefaultThree" role="tab">
                                        <a class="panel-title collapsed" data-toggle="collapse" href="#exampleCollapseDefaultThree"
                                           data-parent="#exampleAccordionDefault" aria-expanded="false"
                                           aria-controls="exampleCollapseDefaultThree">
                                            Collapsible Group Item #3
                                        </a>
                                    </div>
                                    <div class="panel-collapse collapse" id="exampleCollapseDefaultThree" aria-labelledby="exampleHeadingDefaultThree"
                                         role="tabpanel">
                                        <div class="panel-body">
                                            Horum, antiquitate perciperet d conspectum locus obruamus animumque perspici probabis
                                            suscipere. Desiderat magnum, contenta poena desiderant
                                            concederetur menandri damna disputandum corporum equidem
                                            cyrenaicisque. Defuturum ultimum ista ignaviamque iudicant
                                            feci incursione, reprimique fruenda utamur tu faciam
                                            complexiones eo, habeo ortum iucundo artes.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>

            <div class="col-md-3">
                <div class="panel btn-direction btn-left">
                    <div class="panel-body">
                        <button type="button" class="btn btn-block btn-default">Input</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')

@endsection
