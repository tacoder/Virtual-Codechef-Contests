<?php require("../../includes/header.php"); ?><h1>Longest Weird Subsequence</h1><div class="content">

<p>Finding the longest increasing subsequence is an old and well-known problem now. Here you will have to do something similar. You need to find the longest <i>weird</i> subsequence (LWS) of the given string. The subsequence is called <i>weird</i> if it can be split into two disjoint subsequences, one of which is non-decreasing and the other one is non-increasing. </p>
<p>Just for clarity, by subsequence of the given string <b>S</b> we mean any string that can be obtained from <b>S</b> by erasing from it zero or more characters. So empty string is a subsequence of any string and any string is a subsequence of itself. Further, note that we consider only strings composed of lowercase Latin letters and these letters compared by their ASCII codes. So, for example, 'a' is smaller than 'b' and 'p' is larger than 'h'. </p>
<p>Now let's consider some example. Let <b>S="aabcazcczba"</b>. Then <b>"abczz"</b> is its some non-decreasing subsequene, <b>"zccb"</b> is its some non-increasing subsequence and <b>"aabczcczba"</b> is its some weird subsequence since it can be split into non-decreasing subsequence <b>"aabzz"</b> and non-increasing subsequence <b>"cccba": "AABcZccZba"</b> (first subsequence is shown by capital letters just for calrity). </p>
<h3>Input</h3>
<p>The first line contains a single positive integer <b>T</b>, the number of test cases. <b>T</b> test cases follow. The only line of each test case contains a non-empty string <b>S</b> composed of lowercase Latin letters. </p>
<h3>Output</h3>

<p>For every test case, output the length of the LWS of the given string. </p>
<h3>Constraints</h3>
<pre>
1 ≤ <b>T</b> ≤ 10
1 ≤ length of <b>S</b> ≤ 2000

</pre><h3>Example</h3>
<pre>
<b>Input</b>
3
abc
cbazyzabc
ddaabbaacc

<b>Output</b>
3
6
10

</pre><h3>Explanation</h3>
<p><b>First case:</b> The string itself is LWS since it can be split into non-decreasing subsequence <b>"abc"</b> and non-increasing empty subsequence.</p>
<p><b>Second case:</b> One of the possible LWS is <b>"cbaabc"</b> since it can be split as <b>"cbaABC"</b>. Here we indicate by capital letters non-decreasing subsequence and by lowercase letters non-increasing one. Other possible LWS's are <b>"cbaZZa", "AzyaBC"</b>.</p>
<p><b>Third case:</b> Here the desired splitting is <b>"ddAABBaaCC"</b>.</p>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/vamsi_kavala">vamsi_kavala</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/anton_lunyov">anton_lunyov</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>29-07-2011</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>3 sec</td>
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