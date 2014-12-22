<?php require("../../includes/header.php"); ?><h1>Good Joke!</h1><div class="content">
<h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/COOK52/mandarin/RRJOKE.pdf">Mandarin Chinese</a> and <a target="_blank" href="http://www.codechef.com/download/translated/COOK52/russian/RRJOKE.pdf">Russian</a> as well.</h3>
<p>
Vadim and Roman like discussing challenging problems with each other. One day Vadim told his friend following problem:</p>
<p> Given <b>N</b> points on a plane. Each point <b>p</b> is defined by it's two integer coordinates — <b>p<sub>x</sub></b> and <b>p<sub>y</sub></b>. The distance between points <b>a</b> and <b>b</b> is <b>min(|a<sub>x</sub> - b<sub>x</sub>|, |a<sub>y</sub> - b<sub>y</sub>|)</b>. You should choose a starting point and make a route visiting every point exactly once, i.e. if we write down numbers of points in order you visit them we should obtain a permutation. Of course, overall distance walked should be as small as possible. The number of points may be up to <b>40</b>.
</p>
<p>"40? Maybe 20? Are you kidding?" – asked Roman. "No, it's not a joke" – replied Vadim. So Roman had nothing to do, but try to solve this problem. Since Roman is really weak in problem solving and you are the only friend, except Vadim, with whom Roman can discuss challenging tasks, he has nobody else to ask for help, but you!
</p>

<h3>Input</h3>
<p>Input description.</p>
<p>The first line of the input contains an integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows.The first line of each test case contains a single integer <b>N</b> denoting the number of points on a plane. The following <b>N</b> lines contain two space-separated integers each — coordinates of points. </p>
<h3>Output</h3>
<p>Output description.</p>
<p>Output the answer for every test case in a separate line. The answer for every test case is a permutation of length <b>N</b>. In case there are several solutions that lead to minimal distance walked, you should choose the lexicographically smallest one. Let <b>P</b> denote such permutation. To make output smaller, you should output <b>H(P)</b>. <b>H(P) = P<sub>1</sub> xor P<sub>2</sub> xor ... xor P<sub>N</sub></b>. Have a look at the example and it's explanation for better understanding. </p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>10</b></li>
<li><b>1</b> ≤ <b>N</b> ≤ <b>40</b></li>
<li><b>0</b> ≤ <b>absolute value of each coordinate</b> ≤ <b>1000</b></li>
<li><b>1</b> ≤ sum over all <b>N</b> in a single test file ≤ <b>120</b></li>
</ul>

<h3>Example</h3>
<pre><b>Input:</b>
2
2
1 2
0 0
3
3 3
0 0
0 3
<b>Output:</b>
3
0
</pre>
<h3>Explanation</h3>
<p>For the first test case permutation <b>[1, 2]</b> is optimal. <b> 1 xor 2 = 3</b>.<br />
<br /><br />
For the second one both <b>[2, 3, 1]</b> and <b>[1, 3, 2]</b> lead us to the shortest walk, but the second one is lexicographically smaller. So the answer is <b>H([1, 3, 2]) = 1 xor 3 xor 2 = 0 </b>.
 </p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/Rubanenko">Rubanenko</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/tuananh93">tuananh93</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>18-12-2014</td>
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
    </table><?php require("../../includes/footer.php"); ?>