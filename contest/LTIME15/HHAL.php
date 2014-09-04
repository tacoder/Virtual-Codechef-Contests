<?php require("../../includes/header.php"); ?><h1>Harrenhal</h1><div class="content">
<h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/LTIME15/mandarin/HHAL.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/LTIME15/russian/HHAL.pdf">Russian</a>.</h3>
<p><i>Harrenhal is the largest castle in the Seven Kingdoms and is the seat of House Whent in the Riverlands, on the north shore of the Gods Eye lake. Since the War of Conquest, however, it has become a dark and ruinous place.</i></p>
<p align="right">(c) A Wiki of Ice and Fire</p>
<p><img src="https://codechef_shared.s3.amazonaws.com/download/LTIME15/harrenhal.jpg" height="250" /></p>
<p>Now Harrenhal is too dangerous since it's a nice place for bandits to hide, or even for rebels to start planning overthrowing of the king. So, the current Lord of the Seven Kingdoms has decided, that it's time to completely ruin the castle. For that puposes, he's planning to send some military troops.</p>
<p>In this problem we assume, that Harrenhal can be described as a string <b>H</b>, which consists only of symbols <i>'a'</i> and <i>'b'</i>. Harrenhal is completely ruined if and only if the length of <b>H</b> is equal to zero.</p>
<p>So, how to make <b>H</b> empty? Send a military troop! When a military troop of the king reach the castle, they delete some palindromic subsequence <b>S</b> of <b>H</b>. For example, let <b>H</b> = <i>'abbabaab'</i>. Then the current military troop can choose <b>S</b> = <i>'ababa'</i>(Let's make symbols of <b>S</b> bold in <b>H</b>: <i>'<b>ab</b>b<b>ab</b>a<b>a</b>b'</i>). After deleting <b>S</b>, <b>H</b> will be equal to <i>'bab'</i>. Military troops are free to choose any possible palindromic subsequence of <b>H</b>.</p>
<p>Your task is pretty simple: determine the minimal number of military troops, that the Lord of the Seven Kingdoms has to send in order to ruin Harrenhal.</p>
<h3>Note</h3>
<p>
Maybe, some of you aren't familiar with definitions from the statement. Here're some articles that could help you to understand the problem correctly:</p>
<ul>
<li>Subsequence: <a href="http://en.wikipedia.org/wiki/Subsequence">http://en.wikipedia.org/wiki/Subsequence</a></li>
<li>Palindrome: <a href="http://en.wikipedia.org/wiki/Palindrome">http://en.wikipedia.org/wiki/Palindrome</a></li>
</ul>

<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b>, denoting the number of test cases.</p>
<p>The next <b>T</b> lines contain a string <b>H</b> each, denoting the string, that describes the current state of Harrenhal for the corresponding test cases.</p>
<p>It's guaranteed, that each <b>H</b> consists only of symbols <i>'a'</i> and <i>'b'</i>.</p>
<h3>Output</h3>
<p>The output should contain exactly <b>T</b> lines. <b>i</b>'th line of the output should contain the only integer: the minimal number of military troops, that the Lord of the Seven Kingdoms has to send in order to ruin Harrenhal for the corresponding test cases.</p>
<h3>Constraints</h3>
<ul>
<li>1 ≤ <b>|H|</b> ≤ 100000, for each <b>H</b>.</li>
<li>Subtask 1(30 points): each <b>H</b> in the input is a palindrome, 1 ≤ <b>T</b> ≤ 6;</li>
<li>Subtask 2(70 points): 1 ≤ <b>T</b> ≤ 9.</li>
</ul>
<h3>Example</h3>
<pre><b>Input:</b>
1
abbabaab

<b>Output:</b>
2
</pre><h3>Explanation</h3>
<p>There're multiple ways to ruin Harrenhal in the example test. Let's consider one of them.</p>
<p>The first troop can delete <b>S</b> = <i>'ababa'</i>(<i>'<b>ab</b>b<b>ab</b>a<b>a</b>b'</i>). After that, <b>H</b> = <i>'bab'</i>.</p>
<p>The second troop can delete <b>S</b> = <i>'bab'</i>(<i>'<b>bab</b>'</i>). After that, <b>H</b> is empty and that's it.</p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/kostya_by">kostya_by</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/stzgd">stzgd</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>27-07-2014</td>
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