<?php require("../../includes/header.php"); ?><h1>Bonus</h1><div class="content">

<p>Kinku is a project manager in his company. Recently, the executives decided to give bonus to everyone in his team, so Kinku was asked to give a list to them how much bonus each should get.</p>
<p>To do this, he selected some pairs of members, and analyzed who should get more bonus, and how more much he should get (at least). That is, if employee Tom is better than Jerry, and Tom should get at least 300$ more than Jerry, then, if Jerry gets 650$ bonus, Tom has to get atleast 950$ bonus. It should also be noted that, every one will get at least a minimum, no one will go empty handed. </p>
<p>Given all the comparisons, you have to find the minimum total bonus to be divided among the employees. </p>
<h3>Input</h3>
<p>First line contains T, the number of test cases. Each test case starts with three integers &quot;cmmi-10x-x-109&quot;&gt;N(1 &#8804; &quot;cmmi-10x-x-109&quot;&gt;N &#8804; 100), &quot;cmmi-10x-x-109&quot;&gt;M(0 &#8804; &quot;cmmi-10x-x-109&quot;&gt;M &#8804; &quot; <img src="/download/problemset0x.png" width="42" height="42" /> &quot;N-&times;(N&#8722;1) 2&quot; and L(1 &#8804; L &#8804; 10000), the number of employees, number of comparisons and minimum bonus. Next M lines each contains three integers, i, j(1 &#8804; i, j &#8804; N and c(0 &#8804; c &#8804; 1000), referring that employee<sub> &quot;cmmi-8&quot;&gt;i</sub> should get at least c$ more than employee <sub>&quot;cmmi-8&quot;&gt;j</sub> . </p>
<h3>Output</h3>

<p>For each test case, output the minimum total bonus on the first line, and the bonus given to each employee in the next line. If comparisons are inconsistent, and it&rsquo;s not possible distribute bonus among them, output &ldquo; &quot;cmtt-10x-x-109&quot;&gt;Inconsistent &quot;cmtt-10x-x-109&quot;&gt;analysis.&rdquo;(without quotes). </p>
<h3>Sample input and output</h3>
<pre>
stdin

2
4 "cmtt-10x-x-109"&gt;4 100
1 "cmtt-10x-x-109"&gt;2 10
2 "cmtt-10x-x-109"&gt;3 20
1 "cmtt-10x-x-109"&gt;3 40
2 "cmtt-10x-x-109"&gt;4 5
3 "cmtt-10x-x-109"&gt;3 100
1 "cmtt-10x-x-109"&gt;2 10
2 "cmtt-10x-x-109"&gt;3 10
3 "cmtt-10x-x-109"&gt;1 10
</pre><pre>
stdout

460
140 "cmtt-10x-x-109"&gt;120 100
100
Inconsistent analysis.
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/admin">admin</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>27-10-2010</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>10 sec</td>
        </tr>
        <tr>
            <td width="14%">Source Limit:</td>
            <td>50000 Bytes</td>
        </tr>
        <tr>
            <td width="14%">Languages:</td>
            <td>C, C99 strict, CLOJ, CPP 4.3.2, CPP11, FS, GO, JAVA, NODEJS, PERL6, PYTH 3.1.2, TEXT</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>