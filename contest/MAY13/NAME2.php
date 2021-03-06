<?php require("../../includes/header.php"); ?><h1>Your Name is Mine</h1><div class="content">

<p>In an attempt to control the rise in population, <strong>Archer</strong> was asked to come up with a plan. This time he is targeting marriages. Archer, being as intelligent as he is, came up with the following plan:</p>
<p>A man with name <strong>M</strong> is allowed to marry a woman with name <strong>W</strong>, only if <strong>M</strong> is a <a href="http://en.wikipedia.org/wiki/Subsequence">subsequence</a> of <strong>W</strong> or <strong>W</strong> is a subsequence of <strong>M</strong>.</p>
<p><strong>A</strong> is said to be a subsequence of <strong>B</strong>, if <strong>A</strong> can be obtained by deleting some elements of <strong>B</strong> without changing the order of the remaining elements.</p>
<p>Your task is to determine whether a couple is allowed to marry or not, according to Archer's rule.</p>
<h3>Input</h3>
<p>The first line contains an integer <strong>T</strong>, the number of test cases. <strong>T</strong> test cases follow. Each test case contains two space separated strings <strong>M</strong> and <strong>W</strong>.</p>
<h3>Output</h3>
<p>For each test case print <code>"YES"</code> if they are allowed to marry, else print <code>"NO"</code>. (quotes are meant for clarity, please don't print them)</p>
<h3>Constraints</h3>
<ul>
<li><b>1 ≤ T ≤ 100</b></li>
<li><b>1 ≤ |M|, |W| ≤ 25000 (|A| denotes the length of the string A.)</b></li>
<li>All names consist of lowercase English letters only.</li>
</ul>
<h3>Example</h3>
<pre><b>Input:</b>
3
john johanna
ira ira
kayla jayla

<b>Output:</b>
YES
YES
NO
</pre><h3>Explanation</h3>
<p><strong>Case 1:</strong> Consider <strong>S = "johanna"</strong>. So, <strong>S[0] = 'j', S[1] = 'o', S[2] = 'h'</strong> and so on. If we remove the indices [3, 4, 6] or [3, 5, 6] from S, it becomes <strong>"john"</strong>. Hence <strong>"john"</strong> is a subsequence of <strong>S</strong>, so the answer is "YES".</p>
<p><strong>Case 2:</strong> Any string is a subsequence of it self, as it is formed after removing <strong>"0"</strong> characters. Hence the answer is <strong>"YES"</strong>.</p>
<p><strong>Case 3:</strong> <strong>"jayla"</strong> can not be attained from <strong>"kayla"</strong> as removing any character from <strong>"kayla"</strong> would make the string length smaller than <strong>"jayla"</strong>, also there is no <strong>'j'</strong> in <strong>"kayla"</strong>. Similar reasoning can be applied to see why <strong>"kayla"</strong> can't be attained from <strong>"jayla"</strong>. Hence the answer is "NO".</p>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/kaushik_iska">kaushik_iska</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/pieguy">pieguy</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>27-03-2013</td>
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