<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {

        User::factory()->create([
            'name' => 'Nikola Londrovic',
            'email' => 'nikolalondrovic41@gmail.com',
            'password' => "$2y$10\$WWh5t3JIoRgg7.9VewLsO.ouLvf187.Z.BRfb0SEngILvhK0rG/wO",
            'admin' => true,
            'picture' => "https://upload.wikimedia.org/wikipedia/commons/thumb/0/04/Elon_Musk_-_The_Summit_2013.jpg/800px-Elon_Musk_-_The_Summit_2013.jpg",
            'about' => "Ilon Riv Mask je južnoafričko-američki preduzetnik i inženjer.Osnivač je, direktor i glavni inženjer/dizajner kompanije Spejs eks; saosnivač, direktor i dizajner proizvoda u kompaniji Tesla; saosnivač i direktor Neuralinka; i saosnivač Pejpala. U decembru 2016. zauzeo je 21. mesto na Forbsovoj listi najmoćnijih ljudi sveta. Od januara 2019. godine, njegovo neto bogatstvo procijenjeno je na 21,4 milijardi dolara, a 2018. godine bio je na 54. mestu na Forbsovoj listi najbogatijih ljudi na svetu. Od januara 2021. godine, zauzeo je 1. mesto najbogatijih ljudi na svetu."
        ]);

        $posts = [
            [
                'title' => 'This is a rich text post 1.',
                'slug' => 'placeat-quisquam-eum-dolorem-ea-optio-alias',
                'short_description' => 'Hic iusto ab non dolor. Non neque temporibus esse possimus. Ab qui provident esse qui.',
                'description' => "<h1>Nam, ut sint illa vendibiliora, haec uberiora certe sunt.</h1>

<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. A primo, ut opinor, animantium ortu petitur origo summi boni. Iam id ipsum absurdum, maximum malum neglegi. Duo Reges: constructio interrete. </p>

<dl>
	<dt><dfn>Tu quidem reddes;</dfn></dt>
	<dd>Illa argumenta propria videamus, cur omnia sint paria peccata.</dd>
	<dt><dfn>Equidem e Cn.</dfn></dt>
	<dd>Ac tamen, ne cui loco non videatur esse responsum, pauca etiam nunc dicam ad reliquam orationem tuam.</dd>
	<dt><dfn>Respondeat totidem verbis.</dfn></dt>
	<dd>Verba tu fingas et ea dicas, quae non sentias?</dd>
	<dt><dfn>Equidem e Cn.</dfn></dt>
	<dd>In schola desinis.</dd>
</dl>


<h2>Summum a vobis bonum voluptas dicitur.</h2>

<p>Profectus in exilium Tubulus statim nec respondere ausus; Dic in quovis conventu te omnia facere, ne doleas. Ergo ita: non posse honeste vivi, nisi honeste vivatur? Hosne igitur laudas et hanc eorum, inquam, sententiam sequi nos censes oportere? </p>

<blockquote cite=\"http://loripsum.net\">
	In motu et in statu corporis nihil inest, quod animadvertendum esse ipsa natura iudicet?
</blockquote>


<pre>Hic dolor populi Romani duce et auctore Bruto causa civitati
libertatis fuit, ob eiusque mulieris memoriam primo anno et
vir et pater eius consul est factus.

    Rapior illuc, revocat autem Antiochus, nec est praeterea,
quem audiamus.
</pre>


<ol>
	<li>Multoque hoc melius nos veriusque quam Stoici.</li>
	<li>Introduci enim virtus nullo modo potest, nisi omnia, quae leget quaeque reiciet, unam referentur ad summam.</li>
	<li>Quid ergo aliud intellegetur nisi uti ne quae pars naturae neglegatur?</li>
	<li>Ex rebus enim timiditas, non ex vocabulis nascitur.</li>
	<li>Illud mihi a te nimium festinanter dictum videtur, sapientis omnis esse semper beatos;</li>
</ol>


<p>Dempta enim aeternitate nihilo beatior Iuppiter quam Epicurus; <mark>Sed quot homines, tot sententiae;</mark> Quae autem natura suae primae institutionis oblita est? At ille pellit, qui permulcet sensum voluptate. <b>Nunc vides, quid faciat.</b> <code>Universa enim illorum ratione cum tota vestra confligendum puto.</code> Quamquam non negatis nos intellegere quid sit voluptas, sed quid ille dicat. <code>Quae ista amicitia est?</code> Hoc enim identidem dicitis, non intellegere nos quam dicatis voluptatem. <mark>Quae diligentissime contra Aristonem dicuntur a Chryippo.</mark> </p>

<ul>
	<li>Tertium autem omnibus aut maximis rebus iis, quae secundum naturam sint, fruentem vivere.</li>
	<li>A mene tu?</li>
	<li>Ita enim vivunt quidam, ut eorum vita refellatur oratio.</li>
	<li>Tu autem inter haec tantam multitudinem hominum interiectam non vides nec laetantium nec dolentium?</li>
</ul>


<p>Cetera illa adhibebat, quibus demptis negat se Epicurus intellegere quid sit bonum. <b>Sint ista Graecorum;</b> Quae qui non vident, nihil umquam magnum ac cognitione dignum amaverunt. Scaevola tribunus plebis ferret ad plebem vellentne de ea re quaeri. Ut alios omittam, hunc appello, quem ille unum secutus est. Quid affers, cur Thorius, cur Caius Postumius, cur omnium horum magister, Orata, non iucundissime vixerit? Nihil enim iam habes, quod ad corpus referas; Quos nisi redarguimus, omnis virtus, omne decus, omnis vera laus deserenda est. Atque his de rebus et splendida est eorum et illustris oratio. </p>

    ",
                'user_id' => 1,
                'picture' => '/storage/images/posts/' . rand(1, 17) . '.jpg'
            ],
            [
                'title' => 'This is a rich text post 2',
                'slug' => 'velit-dolorum-et-eligendi-et-ut-quia',
                'short_description' => 'Hic iusto ab non dolor. Non neque temporibus esse possimus. Ab qui provident esse qui.',
                'description' => "<h1>Quid enim me prohiberet Epicureum esse, si probarem, quae ille diceret?</h1>

<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. <a href=\"http://loripsum.net/\" target=\"_blank\">Ut pulsi recurrant?</a> Peccata paria. </p>

<pre>An vero displicuit ea, quae tributa est animi virtutibus
tanta praestantia?

        Quae animi affectio suum cuique tribuens atque hanc, quam
dico.
</pre>


<ol>
	<li>Est, ut dicis, inquit;</li>
	<li>Itaque his sapiens semper vacabit.</li>
	<li>Verum esto: verbum ipsum voluptatis non habet dignitatem, nec nos fortasse intellegimus.</li>
	<li>Intrandum est igitur in rerum naturam et penitus quid ea postulet pervidendum;</li>
	<li>Illud quaero, quid ei, qui in voluptate summum bonum ponat, consentaneum sit dicere.</li>
	<li>Virtutibus igitur rectissime mihi videris et ad consuetudinem nostrae orationis vitia posuisse contraria.</li>
</ol>


<dl>
	<dt><dfn>Primum divisit ineleganter;</dfn></dt>
	<dd>Sed non alienum est, quo facilius vis verbi intellegatur, rationem huius verbi faciendi Zenonis exponere.</dd>
	<dt><dfn>Si longus, levis;</dfn></dt>
	<dd>Non autem hoc: igitur ne illud quidem.</dd>
</dl>


<h2>Videmus in quodam volucrium genere non nulla indicia pietatis, cognitionem, memoriam, in multis etiam desideria videmus.</h2>

<p><i>Cum audissem Antiochum, Brute, ut solebam, cum M.</i> Quod totum contra est. Si quidem, inquit, tollerem, sed relinquo. Quid ad utilitatem tantae pecuniae? <b>At multis malis affectus.</b> <b>Ita nemo beato beatior.</b> </p>

<blockquote cite=\"http://loripsum.net\">
        Quibus rebus intellegitur nec timiditatem ignaviamque vituperari nec fortitudinem patientiamque laudari suo nomine, sed illas reici, quia dolorem pariant, has optari, quia voluptatem.
</blockquote>


<p>Scisse enim te quis coarguere possit? Duo Reges: constructio interrete. <a href=\"http://loripsum.net/\" target=\"_blank\">Praeclare hoc quidem.</a> </p>

<ul>
	<li>Si ad corpus pertinentibus, rationes tuas te video compensare cum istis doloribus, non memoriam corpore perceptarum voluptatum;</li>
	<li>Eam tum adesse, cum dolor omnis absit;</li>
	<li>Quo modo autem optimum, si bonum praeterea nullum est?</li>
	<li>Quicquid enim a sapientia proficiscitur, id continuo debet expletum esse omnibus suis partibus;</li>
	<li>Quam illa ardentis amores excitaret sui! Cur tandem?</li>
	<li>Idem etiam dolorem saepe perpetiuntur, ne, si id non faciant, incidant in maiorem.</li>
</ul>


    ",
                'user_id' => 1,
                'picture' => '/storage/images/posts/' . rand(1, 17) . '.jpg',

            ],
            [
                'title' => 'This is a rich text post 3.',
                'slug' => 'placeat-quisquam-eum-dolorem-ea-optio-alias',
                'short_description' => 'Hic iusto ab non dolor. Non neque temporibus esse possimus. Ab qui provident esse qui.',
                'description' => "<h1>Ab his oratores, ab his imperatores ac rerum publicarum principes extiterunt.</h1>

<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duo Reges: constructio interrete. Alterum significari idem, ut si diceretur, officia media omnia aut pleraque servantem vivere. Quis suae urbis conservatorem Codrum, quis Erechthei filias non maxime laudat? Sed tamen est aliquid, quod nobis non liceat, liceat illis. <a href=\"http://loripsum.net/\" target=\"_blank\">Qui est in parvis malis.</a> Ego autem tibi, Piso, assentior usu hoc venire, ut acrius aliquanto et attentius de claris viris locorum admonitu cogitemus. <a href=\"http://loripsum.net/\" target=\"_blank\">Itaque hic ipse iam pridem est reiectus;</a> Nonne videmus quanta perturbatio rerum omnium consequatur, quanta confusio? <a href=\"http://loripsum.net/\" target=\"_blank\">Id enim natura desiderat.</a> Ut placet, inquit, etsi enim illud erat aptius, aequum cuique concedere. </p>

<h2>Falli igitur possumus.</h2>

<p>Cum autem assumpta ratío est, tanto in dominatu locatur, ut omnia illa prima naturae hulus tutelae subiciantur. <b>Iam contemni non poteris.</b> <a href=\"http://loripsum.net/\" target=\"_blank\">Sed videbimus.</a> Qua exposita scire cupio quae causa sit, cur Zeno ab hac antiqua constitutione desciverit, quidnam horum ab eo non sit probatum; Tertium autem omnibus aut maximis rebus iis, quae secundum naturam sint, fruentem vivere. Quid, quod homines infima fortuna, nulla spe rerum gerendarum, opifices denique delectantur historia? Et hercule-fatendum est enim, quod sentio -mirabilis est apud illos contextus rerum. Qua igitur re ab deo vincitur, si aeternitate non vincitur? Nos quidem Virtutes sic natae sumus, ut tibi serviremus, aliud negotii nihil habemus. Quid, si non sensus modo ei sit datus, verum etiam animus hominis? </p>

<ul>
	<li>Cum id fugiunt, re eadem defendunt, quae Peripatetici, verba.</li>
	<li>Et quidem, Cato, hanc totam copiam iam Lucullo nostro notam esse oportebit;</li>
	<li>Quis Aristidem non mortuum diligit?</li>
	<li>Graecum enim hunc versum nostis omnes-: Suavis laborum est praeteritorum memoria.</li>
	<li>Universa enim illorum ratione cum tota vestra confligendum puto.</li>
</ul>


<pre>Nescio quo modo praetervolavit oratio.

    In omni enim arte vel studio vel quavis scientia vel in ipsa
virtute optimum quidque rarissimum est.
</pre>


<dl>
	<dt><dfn>Scrupulum, inquam, abeunti;</dfn></dt>
	<dd>Dicimus aliquem hilare vivere;</dd>
	<dt><dfn>Nos commodius agimus.</dfn></dt>
	<dd>Aliter enim explicari, quod quaeritur, non potest.</dd>
	<dt><dfn>Quid enim?</dfn></dt>
	<dd>Ex quo illud efficitur, qui bene cenent omnis libenter cenare, qui libenter, non continuo bene.</dd>
	<dt><dfn>Magna laus.</dfn></dt>
	<dd>Collatio igitur ista te nihil iuvat.</dd>
</dl>


<h3>Sed haec in pueris;</h3>

<p>Aut, si esses Orestes, Pyladem refelleres, te indicares et, si id non probares, quo minus ambo una necaremini non precarere? Iis igitur est difficilius satis facere, qui se Latina scripta dicunt contemnere. <i>Quo tandem modo?</i> <b>Honesta oratio, Socratica, Platonis etiam.</b> Si est nihil nisi corpus, summa erunt illa: valitudo, vacuitas doloris, pulchritudo, cetera. Addidisti ad extremum etiam indoctum fuisse. Nec enim, omnes avaritias si aeque avaritias esse dixerimus, sequetur ut etiam aequas esse dicamus. Eam si varietatem diceres, intellegerem, ut etiam non dicente te intellego; </p>

<h4>Haec mihi videtur delicatior, ut ita dicam, molliorque ratio, quam virtutis vis gravitasque postulat.</h4>

<p>Hoc autem tempore, etsi multa in omni parte Athenarum sunt in ipsis locis indicia summorum virorum, tamen ego illa moveor exhedra. Quid ei reliquisti, nisi te, quoquo modo loqueretur, intellegere, quid diceret? Magni enim aestimabat pecuniam non modo non contra leges, sed etiam legibus partam. An hoc usque quaque, aliter in vita? Est autem officium, quod ita factum est, ut eius facti probabilis ratio reddi possit. Bonum negas esse divitias, praeposìtum esse dicis? Is ita vivebat, ut nulla tam exquisita posset inveniri voluptas, qua non abundaret. Aliter enim nosmet ipsos nosse non possumus. </p>

<p>Quis, quaeso, illum negat et bonum virum et comem et humanum fuisse? Voluptatem cum summum bonum diceret, primum in eo ipso parum vidit, deinde hoc quoque alienum; An haec ab eo non dicuntur? Atque ut ceteri dicere existimantur melius quam facere, sic hi mihi videntur facere melius quam dicere. Hoc igitur quaerentes omnes, et ii, qui quodcumque in mentem veniat aut quodcumque occurrat se sequi dicent, et vos ad naturam revertemini. <i>Nos commodius agimus.</i> Quid ergo attinet dicere: Nihil haberem, quod reprehenderem, si finitas cupiditates haberent? Quae cum essent dicta, finem fecimus et ambulandi et disputandi. </p>

<ol>
	<li>ALIO MODO.</li>
	<li>Nihil enim iam habes, quod ad corpus referas;</li>
	<li>Quis Aristidem non mortuum diligit?</li>
	<li>Cuius quidem, quoniam Stoicus fuit, sententia condemnata mihi videtur esse inanitas ista verborum.</li>
</ol>


<blockquote cite=\"http://loripsum.net\">
        Nec enim figura corporis nec ratio excellens ingenii humani significat ad unam hanc rem natum hominem, ut frueretur voluptatibus.
</blockquote>
    ",
                'user_id' => 1,
                'picture' => '/storage/images/posts/' . rand(1, 17) . '.jpg'
            ]
        ];

        foreach ($posts as $post)
            Post::query()->create($post);

        User::factory(20)->create();
        Post::factory(20)->create();

    }
}
