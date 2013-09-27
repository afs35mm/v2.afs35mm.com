
var KT = KT || {};

KT.App = (function(){
	var family,
		word;
	var config = {
		$venn: $('#venn_hover'),
		$vennParagraph: $('#venn_hover p'),
		position:{
			x: null,
			y: null
		},
		wordcloud: {
			parents: {
				school: "<p>'Detroit public schools represent our history... our legacy.'</p>",
				parents: "<p style='font-style:italic'>The parents talked about helping with homework, participating inschool activities, and advocating forbetter schools, and most saw these as important parental roles, but theirmost intense worries revolved around what parents do or do not do to build their children's character-to ensure that their children work hard and behave in school.</p",
				principal: "'If you have to make a phone call to the principal-there's an issue-so you should get a phone call back from the principal-not the assistant principal, not the aide, the principal.'",
				learning: "'To me, tests are not as important as: Is the principal available? Are they doing things to improve? Is your child coming home... engaged in what he's doing in school? Is he learning? I think that's a big deal more than test scores.'",
				teacher: "'I blame society more than the individual teachers because we have a culture that doesn't honor hard work, reading exercise...'",
				kids: "'Families put a lot more on the schools being responsible for their kids. I think that sometimes the school is doing more disciplining and parenting for the kids than necessarily educating.'"

			},
			policymakers:{
				data: "<p>'Let's talk about data.  I understand that word can make people nervous but I see data first and foremost as a barometer.  It tells us what is happening.' &mdash;U.S. Secretary of Education Arne Duncan</p>",
				standards: "<p>'The first principle of accountability for results involves the creation of standards in each state for what a child should know and learn in reading and math in grades three through eight.' &mdash;U.S. Department of Education, 2004</p>",
				districts: "<p>'Once we raised awareness around what good teaching looked like, we tackled evaluations. It was a complete turnaround for the district. Like most, it had a weak system in which teachers were reviewed inconsistently and infrequently, leaving them without the feedback all professionals want and need.' &mdash;former Washington DC school superintendent Michelle Rhee, 2011 Accountability.</p>",
				accountability: "<p>The 'new' accountability, enshrined in federal law since the mid-1990s and a major emphasis of the No Child Left Behind Act of 2001, focuses on student performance, schools as the unit of improvement, public reporting of achievement results, continuous improvement, and consequences for schools attached to student performance. <span style='font-style:italic;'>Education Week</span>, 2004.</p> ",
				school_systems: "'Across the country, school systems are reinventing the ways they evaluate and provide feedback to teachers. Although I don't believe student test scores should be the sole factor in teacher evaluation, I believe just as strongly that they have an important role to play.' &mdash;Thomas Kane, Harvard Graduate School of Education, The Wall Street Journal, 2012",
			}
		}
	};

	var init = function(){
		bindDomEvents();
		//showVennContainer();
	};

	var injectInto = function(obj){
		config.$vennParagraph.html(obj);
	};

	var showVennContainer = function(){
		config.$vennParagraph.html(' ');
		config.$venn.stop().fadeIn();
		config.$venn.css('top' , config.position.y + 50);
	};

	var hideVennContainer = function(){
		config.$venn.stop().hide();
	};

	var bindDomEvents = function(){
		//Venn diagram hover
		$('.venn').find('a').mouseenter(function(e){
			config.position.x = e.pageX;
			config.position.y = e.pageY;

			showVennContainer();
			injectInto($(this).next('.sub-hover').html());			
		}).mouseleave(function(){
			hideVennContainer();
		});

		//word cloud hover
		$('.word-hover').mouseenter(function(e){
			var family = $(this).data('family');
			var word = $(this).data('word');
			$(this).attr('stroke','#fff');
			config.position.x = e.pageX;
			config.position.y = e.pageY;
			showVennContainer();
			console.log(config.wordcloud[family][word]);
			injectInto(config.wordcloud[family][word]);
		}).mouseleave(function(){
			$(this).attr('stroke','');
			hideVennContainer();
		});
	};

	return {
		init: init
	};
	
	

})();

$('document').ready(function(){
	KT.App.init();
});

