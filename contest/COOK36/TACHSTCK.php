<?php require("../../includes/header.php"); ?><h1>Chopsticks</h1><div class="content">
<p><i> </i></p>
<p><i>[<b>Chopsticks</b> (singular: <b>chopstick</b>) are short, frequently tapered sticks used in pairs of equal length, which are used as the traditional eating utensils of China, Japan, Korea and Vietnam. Originated in ancient China, they can also be found in some areas of Tibet and Nepal that are close to Han Chinese populations, as well as areas of Thailand, Laos and Burma which have significant Chinese populations. Chopsticks are most commonly made of wood, bamboo or plastic, but in China, most are made out of bamboo. Chopsticks are held in the dominant hand, between the thumb and fingers, and used to pick up pieces of food.]</i></p>
<p><i>
<p> </p>
</i></p>
<p> </p>
<p align="right">Retrieved from <a href="http://en.wikipedia.org/wiki/Chopsticks">wikipedia</a></p>
<p>Actually, the two sticks in a pair of chopsticks need not be of the same length. A pair of sticks can be used to eat as long as the difference in their length is at most <b>D</b>. The Chef has <b>N</b> sticks in which the i<sup>th</sup> stick is <b>L[i]</b> units long. A stick can't be part of more than one pair of chopsticks. Help the Chef in pairing up the sticks to form the maximum number of usable pairs of chopsticks.</p>
<h3>Input</h3>
<p>The first line contains two space-separated integers <b>N</b> and <b>D</b>. The next <b>N</b> lines contain one integer each, the i<sup>th</sup> line giving the value of <b>L[i]</b>.</p>
<h3>Output</h3>
<p>Output a single line containing the maximum number of pairs of chopsticks the Chef can form.</p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>N</b> ≤ <b>100,000 (10<sup> 5 </sup>) </b></li>
<li><b>0</b> ≤ <b>D</b> ≤ <b>1,000,000,000 (10<sup> 9 </sup>) </b></li>
<li><b>1</b> ≤ <b>L[i]</b> ≤ <b>1,000,000,000 (10<sup> 9 </sup>)</b> for all integers <b>i</b> from <b>1</b> to <b>N</b></li>
</ul>
<h3>Example</h3>
<pre><b>Input:</b>

5 2
1
3
3
9
4

<b>Output:</b>
2
</pre>
<h3>Explanation</h3>
<p>The 5 sticks have lengths 1, 3, 3, 9 and 4 respectively. The maximum allowed difference in the lengths of two sticks forming a pair is at most 2.<br /> It is clear that the 4th stick (length 9) cannot be used with any other stick.<br /> The remaining 4 sticks can can be paired as (1st and 3rd) and (2nd and 5th) to form 2 pairs of usable chopsticks.</p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/tuananh93">tuananh93</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/keshav_57">keshav_57</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>15-05-2013</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>1 sec</td>
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