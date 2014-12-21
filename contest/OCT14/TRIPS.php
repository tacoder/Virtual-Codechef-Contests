<?php require("../../includes/header.php"); ?><h1>Children Trips</h1><div class="content">
<h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/OCT14/mandarin/TRIPS.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/OCT14/russian/TRIPS.pdf">Russian</a>.</h3>
<p>There's a new trend among Bytelandian schools. The "Byteland Touristic Bureau" has developed a new project for the high-schoolers. The project is so-called "Children's Trips".</p>
<p>The project itself is very simple: there are some touristic routes in Byteland, and <b>N</b> touristic campuses (numbered from <b>1</b> to <b>N</b>). For the sake of economy, there are exactly <b>N-1</b> road between them. Of course, even having this given, it is possible to travel from any touristic campus to any other one. Moreover, for the sake of safety, each road is no longer than <b>2</b> kilometers.</p>
<p>When some student wants to travel, he first chooses his starting campus - he is been delivered there (say) by a helicopter. He chooses his final destination campus as well. From his final destination, he will be transported to his home by (say) a helicopter, again. So that pupil won't travel any extra distance by foot. When the start and the finish are chosen and the pupil is delivered, he starts his moving by the only route. None of pupils is infinitely strong, so first the pupil looks at the map of the touristic routes, and then he chooses the furthest campus on his way that he can reach during the current day (by safety regulations, it is strictly prohibited to sleep not at the campus because there can be a little trouble with werewolves), and moves there. Then the new day begins, and it repeats till the moment when the destination is reached.</p>
<p>Of course, not all the students created equal. Somebody is good in math, somebody in English, somebody in PE. So it's quite natural that all high-schoolers has different strengths.<br />
We call the strength is the maximal number of kilometers that the pupil can pass in a day. And now you're given a lot of queries from the children. For every query, you are given the starting campus, the final campus and the strength. You are requested to calculate the number of days for every trip. The map of the campuses and the distances between them will be given to you as well.</p>
<h3>Input</h3>
<p>The first line of input contains the integer <b>N</b>, denoting the number of campuses.</p>
<p>The next <b>N-1</b> lines contain triples of the form <b>X Y D</b> with the meaning that there is a road between the <b>X</b>-th and the <b>Y</b>-th campus with the length <b>D</b> kilometers.</p>
<p>Then there is a line with a single integer <b>M</b>, denoting the number of queries.</p>
<p>Then, there are <b>M</b> lines with the triples of the form <b>S F P</b> with the meaning that the trip starts at the campus <b>S</b>, ends at the campus <b>F</b> and the student has the strength of <b>P</b>.</p>
<h3>Output</h3>
<p>For every query, please output the number of days on a separate line.</p>
<h3>Constraints</h3>
<p><ul>
<li><b>1</b> ≤ <b>N, M</b> ≤ <b>100000</b></li>
<li><b>1</b> ≤ <b>X, Y, S, F</b> ≤ <b>N</b></li>
<li><b>1</b> ≤ <b>D</b> ≤ <b>2</b></li>
<li><b>2</b> ≤ <b>P</b> ≤ <b>2*N</b></li>
</ul>
</p>
<h3>Example</h3>
<pre><b>Input:</b>
5
1 2 1
2 3 2 
1 4 2
4 5 1
5
1 5 3
1 3 2
2 5 4
1 2 10
4 5 2

<b>Output:</b>
1
2
1
1
1
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/xcwgf666">xcwgf666</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/shangjingbo">shangjingbo</a></td>
				</tr>
								
		        		<tr>
            <td width="14%">Date Added:</td>
            <td>4-08-2014</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>8 sec</td>
        </tr>
        <tr>
            <td width="14%">Source Limit:</td>
            <td>50000 Bytes</td>
        </tr>
        <tr>
            <td width="14%">Languages:</td>
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, ERL, FORT, FS, GO, HASK, ICK, ICON, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PERL6, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TCL, TEXT, WSPC</td>
        </tr>
    </table><?php require("../../includes/footer.php"); ?>