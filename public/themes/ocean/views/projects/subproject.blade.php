<div class="row">
        <div class="col-md-6">
            <div class="widget">
                <div class="widget-title">
                    <span class="pull-left">@lang('abysse.overview')</span>

                    <div class="clearfix"></div>
                </div>

                <div class="widget-body">

                    <p>{!! $project->description !!}</p>

                    @if (!empty($children->toArray()))

                        <h5>Sous-projets :</h5>

                        @foreach ($children as $k => $child)

                            {!! link_to_route('project.show', $child->name, [$child->id]) !!}<?= $k != (count($children) - 1) ? ', ' : ''; ?>

                        @endforeach

                    @else

                        <h5>Suivi des tâches :</h5>

                    @endif
                </div>
            </div>
        </div>