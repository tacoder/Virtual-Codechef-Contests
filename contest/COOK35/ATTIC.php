<?php require("../../includes/header.php"); ?><h1>Attic Crossing</h1><div class="content">

<p>Digory Kirke and Polly Plummer are two kids living next door to each other. The attics of the two houses are connected to each other through a passage. Digory's Uncle Andrew has been secretly doing strange things in the attic of his house, and he always ensures that the room is locked. Being curious, Digory suspects that there is another route into the attic through Polly's house, and being curious as kids always are, they wish to find out what it is that Uncle Andrew is secretly up to.</p>
<p>So they start from Polly's house, and walk along the passageway to Digory's. Unfortunately, along the way, they suddenly find that some of the floorboards are missing, and that taking a step forward would have them plummet to their deaths below.</p>
<p>Dejected, but determined, they return to Polly's house, and decide to practice long-jumping in the yard before they re-attempt the crossing of the passage. It takes them exactly one day to master long-jumping a certain length. Also, once they have mastered jumping a particular length L, they are able to jump any amount less than equal to L as well.</p>
<p>The next day they return to their mission, but somehow find that there is another place further up the passage, that requires them to jump even more than they had practiced for. So they go back and repeat the process.</p>
<p>Note the following:</p>
<ul>
<li> At each point, they are able to sense only how much they need to jump at that point, and have no idea of the further reaches of the passage till they reach there. That is, they are able to only see how far ahead is the next floorboard. </li>
<li> The amount they choose to practice for their jump is exactly the amount they need to get across that particular part of the passage. That is, if they can currently jump upto a length <b>L0</b>, and they require to jump a length <b>L1</b>(&gt; L0) at that point, they will practice jumping length <b>L1</b> that day. </li>
<li> They start by being able to "jump" a length of 1. </li>
</ul>
<p>Find how many days it will take them to cross the passageway. In the input, the passageway is described as a string <b>P</b> of '#'s and '.'s. A '#' represents a floorboard, while a '.' represents the absence of a floorboard. The string, when read from left to right, describes the passage from Polly's house to Digory's, and not vice-versa.</p>
<h3>Input</h3>
<p>The first line consists of a single integer <b>T</b>, the number of testcases.<br /> Each of the next <b>T</b> lines consist of the string <b>P</b> for that case.</p>
<h3>Output</h3>
<p>For each case, output the number of days it takes them to cross the passage.</p>
<h3>Constraints</h3>
<ul>
<li> <b>1</b> ≤ <b>T</b> ≤ <b>1,000,000</b> (<b>10<sup>6</sup></b>)</li>
<li> <b>1</b> ≤ |<b>P</b>|  ≤ <b>1,000,000</b> (<b>10<sup>6</sup></b>)</li>
<li> <i>The total length of <b>P</b> will be ≤ <b>5,000,000</b> (<b>5 * 10<sup>6</sup></b>)across all test-cases of a test-file</i> </li>
<li> <b>P</b> will consist of only the characters # and . </li>
<li> The first and the last characters of <b>P</b> will be #. </li>
</ul>
<h3>Example</h3>
<pre><b>Input:</b>
4
####
##.#..#
##..#.#
##.#....#

<b>Output:</b>
0
2
1
2
</pre><h3>Explanation</h3>
<p>For the first example, they do not need to learn any jump size. They are able to cross the entire passage by "jumping" lengths 1-1-1.</p>
<p>For the second example case, they get stuck at the first '.', and take one day learning to jump length 2. When they come back the next day, they get stuck at '..' and take one day to learn to jump length 3.</p>
<p>For the third example case, they get stuck first at '..', and they take one day to learn to jump length 3. On the second day, they are able to jump both length 3 as well as length 2 required to cross the passage.</p>
<p>For the last test case they need to stop and learn jumping two times. At first they need to jump a length 2 and then a length 5.</p>
<h3>Appendix</h3>
<p>Irrelevant to the problem description, if you're curious about what Uncle Andrew was up to, he was experimenting on Magic Rings that could facilitate travel between worlds. One such world, as some of you might have heard of, was Narnia.</p>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/pragrame">pragrame</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/tuananh93">tuananh93</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>3-06-2013</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>3.5 sec</td>
        </tr>
        <tr>
            <td width="14%">Source Limit:</td>
            <td>50000 Bytes</td>
        </tr>
        <tr>
            <td width="14%">Languages:</td>
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, ERL, FORT, FS, GO, HASK, ICK, ICON, JAR, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PERL6, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TCL, TEXT, WSPC</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>