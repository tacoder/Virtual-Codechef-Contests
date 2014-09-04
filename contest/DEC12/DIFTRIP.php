<?php require("../../includes/header.php"); ?><h1>Different Trips</h1><div class="content">

<p>
The Chef is enjoying a wonderful vacation in Byteland. What makes the Chef impressed the most is the road system of the country. Byteland has <b>N</b> cities numbered 1 through <b>N</b>. City 1 is the capital of Byteland. The country also has <b>N</b>-1 bidirectional roads connecting the cities. The <b>i</b>-th road connects two different cities <b>u<sub>i</sub></b> and <b>v<sub>i</sub></b>. In this road system, people can travel between every pair of different cities by going through exactly one path of roads.
</p>
<p>
The roads are arranged in such a way that people can distinguish two cities only when both cities have different number of roads connected to it. Such two cities will be considered <i>similar</i>. For example, city <b>A</b> is similar to the capital if the number of roads connected to city <b>A</b> is equal to the number of roads connected to the capital.
</p>
<p>
On each day during the vacation, the Chef wants to have a trip as follows. He chooses two cities <b>A</b> and <b>B</b> such that the Chef will visit city <b>B</b> if he goes from <b>A</b> to the capital using the shortest path. Then, the Chef will visit the cities on the shortest path from <b>A</b> to <b>B</b> through this path. Please note that <b>A</b> may be equal to <b>B</b>; that means the Chef will enjoy the day in a single city.
</p>
<p>
The Chef does not want to have <i>similar</i> trips. Two trips are considered <i>similar</i> if and only if<br />
they both have the same number of visited cities and for each <b>i</b>, the <b>i</b>-th city visited in one trip is <i>similar</i> to the <b>i</b>-th city visited in the other trip.
</p>
<p>
The Chef wants to have as many different, namely not <i>similar</i>, trips as possible. Help him count the maximum number of possible trips such that no two of them are similar.</p>
<p>
<h3>Input</h3>
</p>
<p>
The first line of the input contains a single integer <b>N</b>. The <b>i</b>-th line of next <b>N</b>-1 lines contains two space-separated integers <b>u<sub>i</sub></b> and <b>v<sub>i</sub></b>, denoting the <b>i</b>-th road.
</p>
<h3>Output</h3>
<p>
Output a single line containing the maximum number of different trips.
</p>
<h3>Constraints</h3>
<p>
1 ≤ <b>N</b> ≤ 100000 (10<sup>5</sup>)<br /><b>u<sub>i</sub></b> ≠ <b>v<sub>i</sub></b></p>
<p>Every pair of different cities can be traveled by going through exactly one path of roads.</p>
<h3>Sample</h3>
<pre>
<b>Input</b>:
3
2 1
3 1

<b>Output</b>:
3
</pre><h3>Explanation</h3>
<p>
In the sample, the country consists of three cities.<br />
There are two roads. The first road connects city 1 and city 2.<br />
The second road connects city 1 and city 3.<br />
Each day, the Chef can choose the following possible trips:
</p>
<ul>
<li>
<b>A</b> = 1, <b>B</b> = 1
</li>
<li>
<b>A</b> = 2, <b>B</b> = 2
</li>
<li>
<b>A</b> = 3, <b>B</b> = 3
</li>
<li>
<b>A</b> = 2, <b>B</b> = 1
</li>
<li>
<b>A</b> = 3, <b>B</b> = 1
</li>
</ul>
<p>
However, since the trip (<b>A</b> = 2, <b>B</b> = 2) is similar to the trip (<b>A</b> = 3, <b>B</b> = 3),<br />
and the trip (<b>A</b> = 2, <b>B</b> = 1) is similar to the trip (<b>A</b> = 3, <b>B</b> = 1),<br />
there are only three possible different trips for the Chef.
</p>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/tuananh93">tuananh93</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/laycurse">laycurse</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>25-09-2012</td>
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