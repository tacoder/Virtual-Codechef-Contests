<?php require("../../includes/header.php"); ?><h1>Random decreasing function</h1><div class="content">

<p>Andriy and Serhiy are little students from the Lyceum of Kremenchuk. Yesterday there was a great party in the city - Chef's birthday. There were a lot of famous programmers at the party and, of course, everybody gave a gift to Chef. Andriy and Serhiy also didn't come empty-handed. Andriy gave Chef two integer numbers <b>N</b> and <b>K</b>. Serhiy was more inventive and gave Chef a strange function called "Random-Decreasing-Function", or "<b>RDF</b>" abbreviated. The function has the following form:</p>
<p> </p>
<pre><code>RDF(N, K)
    <b>for</b> i = 1 <b>to</b> K
        <b>do</b> N = random(N)
    <b>return</b> N</code></pre><p> </p>
<p> </p>
<p>In above language function <b>random(N)</b> returns any integer in the range <b>[0, N)</b> with equal probability. Let's consider that <b>random(0) = 0</b>. Chef likes both gifts very much and he plays with them every day, let alone that he forgot about his restaurant. Chef runs this function plenty times a day. The only trouble is that results are too unexpected for Chef. Now he asks you to find the expected result of <b>RDF(N, K)</b>.</p>
<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows. The only line of each test case contains two space-separated integers <b>N</b> and <b>K</b>.</p>
<h3>Output</h3>
<p>For each test case, output a single line containing the expected result of <b>RDF(N, K)</b>. Your answer will be considered as correct if it has an absolute or relative error less than <b>10<sup>−6</sup></b>. More formally if the expected output is <b>A</b> and your output is <b>B</b>, your output will be considered as correct if and only if<br /><b>|A − B| ≤ 10<sup>−6</sup> * max{|A|, |B|, 1}</b>.</p>
<h3>Constrains</h3>
<p> </p>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>500000</b> (<b>5 * 10<sup>5</sup></b>)</li>
<li><b>1</b> ≤ <b>N</b> &lt; <b>100000</b> (<b>10<sup>5</sup></b>)</li>
<li><b>0</b> ≤ <b>K</b> &lt; <b>100000</b> (<b>10<sup>5</sup></b>)</li>
</ul>
<p> </p>
<h3>Example</h3>
<pre><b>Input:</b>
3
6 1
4 2
4 3

<b>Output:</b>
2.5
0.3750
0.0416667
</pre><h3>Explanation</h3>
<p><b>Example case 1.</b> <b>RDF(6, 1)</b> returns each of the numbers <b>0, 1, 2, 3, 4, 5</b> with probability <b>1/6</b>. Hence the expected value is<br /> <b>(0 + 1 + 2 + 3 + 4 + 5) / 6 = 2.5</b>.</p>
<p><b>Example case 2.</b> Value of <b>N</b> when <b>RDF(4, 2)</b> is called may change by one of the following scenarios:</p>
<ul>
<li><b>4 → 0 → 0</b> with probability <b>1/4</b>.</li>
<li><b>4 → 1 → 0</b> with probability <b>1/4</b>.</li>
<li><b>4 → 2 → 0</b> with probability <b>1/8</b>.</li>
<li><b>4 → 2 → 1</b> with probability <b>1/8</b>.</li>
<li><b>4 → 3 → 0</b> with probability <b>1/12</b>.</li>
<li><b>4 → 3 → 1</b> with probability <b>1/12</b>.</li>
<li><b>4 → 3 → 2</b> with probability <b>1/12</b>.</li>
</ul>
<p>Hence the expected value is<br /> <b>0 * 1/4 + 0 * 1/4 + 0 * 1/8 + 1 * 1/8 + 0 * 1/12 + 1 * 1/12 + 2 * 1/12 = 1/8 + 1/12 + 1/6 = 3/8 = 0.375</b>.</p>
<p><b>Example case 3.</b> You should figure it out by yourself.</p>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/Rubanenko">Rubanenko</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/anton_lunyov">anton_lunyov</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>7-08-2012</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>2 sec</td>
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