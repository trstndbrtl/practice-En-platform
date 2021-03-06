<?php
namespace App\Controller\Utility;

use App\Entity\Verb;
use App\Repository\VerbRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class BuildVerbsController extends AbstractController
{
    /**
     * @Route("/buildverb/verb/{page}", name="app_build_verbs")
     */
    public function buildVerbsData($page, VerbRepository $vr, Request $request, EntityManagerInterface $em)
    {
        $verbs = 'verbs';
        
        $verbs1 = 'abandon,abolish,accelerate,accept,access,accommodate,accompany,achieve,acquire,act,activate,adapt,add,address,adjust,admire,admit,adopt,advance,advise,advocate,affect,affirm,afford,aggregate,agree,aid,aim,alarm,align,alleviate,allow,ally,alter,alternate,amend,analyse,annex,announce,answer,anticipate,appeal,appear,applaud,apply,appoint,appreciate,approach,approve,argue,arrange,arrive,ask,assemble,assert,assess,assign,assist,associate,assume,assure,attach,attack,attain,attempt,attend,attract,authorize,avoid,await,award,backup,balance,ban,beg,behave,believe,belong,bend,benefit,bill,bin,blackmail,blame,blast,blend,block,blood,blow,book,boom,boost,border,borrow,bother,bottle,bound,breach,break,breathe,bridge,brief,bring,broadcast,broaden,bug,burden,bust,buy,bypass,calculate,call,calm,can,cancel,capture,care,carry,cast,catch,cause,cease,celebrate,challenge,change,channel,charge,charm,chase,chat,check,cite,claim,clarify,classify,clean,click,close,coach,code,collaborate,collapse,collect,combine,comfort,command,commend,comment,commit,communicate,compare,compensate,compete,compile,complain';

        $verbs2 = 'complement,complete,compliment,compound,comprise,compromise,concentrate,concern,concert,conclude,condemn,conduct,confer,confess,configure,confirm,congratulate,connect,consent,consider,consolidate,consult,consume,contact,contain,contrast,contribute,control,convene,convert,convey,convince,cook,cooperate,copy,correct,cost,count,cover,crack,craft,crash,create,credit,crop,cross,crown,cruise,crush,cry,cure,custom,cut,damage,dance,dare,date,deal,debate,decide,declare,decline,decrease,deduct,deepen,defeat,defend,define,delay,delegate,delete,deliberate,deliver,demand,demonstrate,deny,depend,deploy,deposit,derive,describe,deserve,designate,destroy,detail,detect,deter,determine,develop,devote,dial,die,differ,dig,diminish,direct,disagree,disappear,discharge,discourage,discover,discuss,dismiss,dispatch,display,dispute,disregard,disrupt,disseminate,dissolve,distinct,distinguish,distribute,dive,divide,divorce,do,document,dominate,double,doubt,download,draft';

        $verbs3 = 'drag,drain,draw,dream,dress,drift,drink,drive,drop,dry,duplicate,dye,earn,ease,eat,echo,edit,educate,elaborate,elect,eliminate,elongate,embrace,emerge,emphasise,emphasize,employ,enable,enact,encompass,encounter,encourage,end,endanger,endorse,enforce,engage,enhance,enjoy,ensure,enter,enterprise,envisage,equal,erase,escape,establish,estimate,evaluate,evolve,examine,exceed,exchange,exclude,excuse,execute,exempt,exercise,exhaust,exhibit,exit,expand,expect,expense,experience,experiment,explain,exploit,explore,export,expose,express,extend,extract,face,fail,fake,fall,fancy,fear,feature,feed,feel,fetch,fig,fight,file,fill,filter,finance,find,fine,finish,fish,fit,fix,flag,flash,float,flow,flush,fly,focus,fold,follow,fool,force,forecast,forget,forgive,form,formulate,forward,foster,frame,freeze,fry,fuel,fulfill,function,fund,gain,gather,gauge,generate,get,give,go,govern,grab,graduate,grant,grasp,grave,groove,grow,guarantee,guard,guess,guide,halt,hand,handle,hang,happen,harm,harmonize,harness,hate,heal,hear';

        $verbs4 = 'heat,help,hesitate,hide,highlight,hinder,hinge,hire,hit,hold,honour,hook,hop,hope,host,hunt,hurt,ignore,illustrate,imagine,impact,impede,implement,imply,import,impose,improve,include,incorporate,increase,indicate,influence,inform,inhibit,initiate,input,insert,insist,inspect,inspire,install,insult,integrate,intensify,interconnect,interpret,interrupt,intervene,interview,introduce,investigate,invite,invoice,invoke,involve,isolate,jeopardize,joke,judge,jump,justify,keep,kill,kiss,knock,know,label,labour,land,laugh,launch,lay,lead,lean,leap,learn,lease,leave,lecture,legitimate,lend,let,leverage,license,lie,lift,like,limit,link,list,listen,live,load,loan,locate,lock,lodge,look,loose,lose,love,lower,maintain,make,manage,mandate,manifest,manipulate,manufacture,map,mark,market,marry,master,match,matter,maximize,may,mean,measure,meet,melt,mention,merge,mind,minimize,mirror,miss,mitigate,mix,mobilize,model,moderate,modernize,modify,mold,monitor,move,must,name,narrow,need,neglect,negotiate,nest,network,note,notice,notify,obey,object,observe,obtain,occupy,occur,offer';

        $verbs5 = 'open,operate,oppose,opt,optimize,order,organise,organize,originate,outline,output,outreach,overcome,overlap,oversee,overview,owe,package,paint,park,participate,partner,party,paste,pay,peak,perceive,perform,permit,persist,persuade,photograph,pick,picture,pile,plan,play,please,pledge,plot,plug,polish,possess,post,postpone,pour,practice,praise,pray,predict,prefer,prepare,preserve,press,pressure,pretend,prevail,prevent,preview,print,prioritize,proceed,process,produce,progress,promise,promote,prompt,propose,prosecute,protect,protest,prove,provide,publish,pull,pump,punch,punish,purchase,pursue,push,put,puzzle,qualify,question,quit,quote,race,rain,raise,range,rate,ratify,reach,react,read,realise,realize,reason,reassure,recall,receive,recognise,recognize,recommend,reconcile,reconsider,record,recover,recruit,reduce,refer,refine,reflect,refuse,regard,register,regret,regulate,reinforce,reiterate,reject,relate,relax,release,relieve,rely,remain,remedy,remember,remind,remove,render,renew,rent,repair,repeal,repeat,replace,reply,report,represent,request,require,rescue,research,reserve,reset,reside,resist,resolve,respect,respond,rest,restore,restrict,result,resume,retain,retire,retreat,return,reveal,revenge,reverse,revert,review,revise,reward,ride,ring,rip,rise,risk,rob,rock,roll,rotate,ruin,rule,run,rush,sacrifice,safeguard,sail,satisfy,save,say,scale,scan';

        $verbs6 = 'scare,schedule,score,scratch,scream,scroll,seal,search,seat,secure,see,seed,seek,seem,seize,select,sell,send,serve,set,settle,shake,share,shear,shell,shift,shine,ship,shock,shoot,shop,show,showcase,shower,shrink,shut,sign,signal,simplify,sin,sing,sink,sit,skip,slice,slide,smell,smile,smoke,snap,snow,solve,sort,sound,spare,spark,speak,specify,spell,spend,spill,spin,split,sponsor,spread,spy,squeeze,stabilize,stack,stage,stamp,stand,start,stay,steal,step,stick,stimulate,stock,stop,store,stream,streamline,strengthen,stretch,strike,struggle,study,submit,substitute,succeed,sue,suffer,suggest,sum,supervise,supply,support,suppose,suppress,surface,surprise,surrender,surround,survive,suspect,suspend,sustain,swap,swear,sweat,swim,switch,symbol,tackle,tag,tail,take,talk,tap,target,taste,teach,tear,tell,terminate,test,testify,thank,think,threaten,throw,tie,tilt,toast,tolerate,touch,trace,track,trade,train,transfer,transform,transit,transition,translate,transmit,transport,trap,treasure,treat,trick,trigger,trim,trouble,trust,try,turn,twist,type,undergo,underline,undermine,undertake,unite,update,upgrade,uphold,upload,upset,uptake,urge,use,validate,value,vary,verify,view,visit,volunteer,vote,wait,walk,want,warm,warn,warrant,wash,waste,watch,weaken,wear,welcome,will,win,wipe,wish,withdraw,witness,wonder,work,worry,worship,wrap,write,yield';

        $preterit = '';
        $participe_present = '';
        $verbs_array = explode(",", ${$verbs.$page});
        foreach($verbs_array as $verb) {
            $verb = trim($verb);
            if (!$vr->findOneBy(['present' => $verb])) {
                // $verbPlus[] = $verb;

                $last2chars = substr($verb, -2);
                $last1chars = substr($verb, -1);

                if ($last2chars == 'el' || $last2chars == 'al') {
                    $preterit = $verb . 'led';
                    $participe_present = $verb . 'ling';
                }elseif($last1chars == 'y'){
                    $verbY = substr($verb, 0, -1);
                    $preterit = $verbY . 'ied';
                    $participe_present = $verb . 'ing';
                }
                elseif($last1chars == 'e'){
                    $preterit = $verb . 'd';
                    $verbE = substr($verb, 0, -1);
                    $participe_present = $verbE . 'ing';
                }else{
                    $preterit = $verb . 'ed';
                    $participe_present = $verb . 'ing';
                }

                $new_verb = new Verb();
                $new_verb->setPresent($verb);
                $new_verb->setParticipePresent($participe_present);
                $new_verb->setPreterit($preterit);
                $new_verb->setParticipePasse($preterit);
                $new_verb->setIrregular(0);
                $em->persist($new_verb);
                $em->flush();
                
            }
        }
        
        return $this->json([
            'msg' => 'ok'
        ], 200, [], ['groups' => ['main']]);

    }

    /**
     * @Route("/the-verb/{present}", name="app_load_the_verb")
     */
    public function loadVerbData(Verb $verb, VerbRepository $vr, Request $request)
    {
        $htmlToRender = $this->renderView('home/the-verb.html.twig', array(
            'page_title' => $verb->getPresent(),
            'verb' => $verb
        ));
        
        return new Response($htmlToRender);
    }

    /**
     * @Route("/load-more/{regular}/{limit}/{offset}", name="app_load_more_verb")
     */
    public function loadMoreListVerbData($regular, $limit, $offset, VerbRepository $vr, Request $request)
    {
        if ($regular == 'irregular') {
            $verbs = $vr->findAllVerbIrregularByAlphabetical(40, $offset);
        }else{
            $verbs = $vr->findAllVerbRegularByAlphabetical(40, $offset);
        }

        $htmlToRender = $this->renderView('partials/load-more-list-verbs.html.twig', array(
            'verbs' => $verbs,
            'limit' => $limit,
            'offset' => $offset + 40,
            'regular' => $regular
        ));
        
        return new Response($htmlToRender);
    }

}