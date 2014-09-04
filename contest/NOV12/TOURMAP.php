<?php require("../../includes/header.php"); ?><h1>Sridhar Likes Travelling</h1><div class="content">

<p style="text-align:justify">
Sridhar was a seasoned traveler. He liked to visit new places. More than all he was a meticulous planner. This time he was planning to visit Europe. He wrote down his travel itinerary like as follows:</p>
<p>If he wanted to visit Madrid, Paris, Munich, Warsaw and Kiev in this order, he would write it down like as:
</p>
<pre>
Madrid Paris 100$
Paris Munich 200$
Munich Warsaw 150$
Warsaw Kiev 120$
</pre><p style="text-align:justify">
More formally, if he wanted to go from <b>A</b> to <b>B</b> directly and the price is <b>C</b> dollars, then he would write
</p>
<pre>A B C$

</pre><p>
on a card.<br />
Each move was written on a different card. Sridhar was a great planner, so he would never visit the same place twice. Just before starting his journey, the cards got shuffled. Help Sridhar figure out the actual order of the cards and the total cost of his journey.
</p>
<h3>Input</h3>
<p style="text-align:justify">
The first line of the input contains an integer <b>T</b>, the number of test cases. <b>T</b> test cases follow. Each case contains an integer <b>N</b>, the number of cities Sridhar is planning to visit. <b>N-1</b> lines follow. Each line is of the form
</p>
<pre>
A<sub>i</sub> B<sub>i</sub> C<sub>i</sub>$

</pre><p>
where the <b>i-th</b> line refers to the <b>i-th</b> card after getting shuffled.</p>
<p>
<h3>Output</h3>
</p>
<p style="text-align:justify">
For each case the output contains <b>N</b> lines, the first <b>N-1</b> lines should contain the <b>N-1</b> cards in their proper original order, the <b>N-th</b> line should contain the total cost of the travel.<br />
See Example for detailed format.</p>
<p>
<h3>Constraints</h3>
</p>
<p style="text-align:justify">
1 ≤ <b>T</b> ≤ 10 <br />
1 ≤ <b>N</b> ≤ 5000 <br />
1 ≤ <b>length of A<sub>i</sub></b> ≤ 50 <br />
1 ≤ <b>length of B<sub>i</sub></b> ≤ 50 <br />
1 ≤ <b>C<sub>i</sub></b> ≤ 1000 <br />
<b>A<sub>i</sub></b>, <b>B<sub>i</sub></b> will contain only <b>lowercase and uppercase latin characters, no two cities will have same names</b>.<br />
The names of cities are case-sensitive. So "warsaw" and "Warsaw" should be considered as different cities.
</p>
<h3>Example</h3>
<pre>
<b>Input</b>
1
5
Warsaw Kiev 120$
Madrid Paris 100$
Munich Warsaw 150$
Paris Munich 200$

<b>Output</b>
Madrid Paris 100$
Paris Munich 200$
Munich Warsaw 150$
Warsaw Kiev 120$
570$
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/kaushik_iska">kaushik_iska</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/laycurse">laycurse</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>3-10-2012</td>
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