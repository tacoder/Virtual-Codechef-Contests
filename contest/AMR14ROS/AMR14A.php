<?php require_once("../../includes/header.php"); ?><h1>Afghan Jerseys</h1><div class="content">
<p class="p1"><span class="s1">Afghanistan is playing its maiden ICC Cricket World Cup in 2015. After all the war, their cricket board wants to put on a good show to get the people’s mind off the strife, and guide it towards the more important kind of conflict — on the pitch. It has therefore decided to give all the players in the country a brand new jersey, with the player’s name printed to inspire them to kick butt.</span></p>
<p class="p2"><span class="s1">Afghani names being long, they do not fit properly on the jerseys. So the board has decided to compress the names into patterns that match parts of the players’ names. To save on the fabric printing cost, each pattern also has to match as many names as possible. The problem has been given to you to solve with your programming skills.</span></p>
<p class="p2"><span class="s1">The pattern is given as a string P. Each character of the pattern P is either a lower-case character between ‘a’ to ‘z’ or '*'. A '*' matches any number of characters (including 0). For example, the string 'abc' matches patterns "*", "a*" and "*b*", but not "b*".</span></p>
<p class="p2"><span class="s1">As the number of players in the country is huge, it’s a tedious task to match them individually. Hence, they have collected the most frequently occurring chunks (only lowercase alphabetical letters) from players’ names as a string T.</span></p>
<p class="p2"><span class="s1">Given a string T, consisting only of lower-case characters ‘a’ to ‘z’, they want to know how many distinct subsequences of T match a given pattern P modulo 1000000007.</span></p>
<p class="p2"><span class="s1">A subsequence of sequence is a sequence of characters that can be derived from the given sequence by deleting some elements without changing the order of the remaining elements. For example, “ace” is a valid subsequence of “abcde”, while “aec” is not.</span></p>
<p class="p3"><span class="s1"><b>Input:</b></span></p>
<p class="p2"><span class="s1">The first line contains the number of test cases, Q. Q test cases follow. Each test case contains the text T on the first line, followed by the pattern P on the next line.</span></p>
<p class="p3"><span class="s1"><b>Output:</b></span></p>
<p class="p2"><span class="s1">Output the answer for each test case on a new line. All answers must be output modulo 1000000007.</span></p>
<p class="p3"><span class="s1"><b>Constraints:</b></span></p>
<p class="p4"><span class="s1">1 &lt;= Q &lt;= 50</span></p>
<p class="p4"><span class="s1">1 &lt;= |T| &lt;= 1000</span></p>
<p class="p4"><span class="s1">1 &lt;= |P| &lt;= 50</span></p>
<p class="p5"> </p>
<p class="p3"><span class="s1"><b>Sample Input:</b></span></p>
<p class="p3"><span class="s1">4</span></p>
<p class="p3"><span class="s1">abc</span></p>
<p class="p3"><span class="s1">*</span></p>
<p class="p3"><span class="s1">aba</span></p>
<p class="p3"><span class="s1">*</span></p>
<p class="p3"><span class="s1">ababa</span></p>
<p class="p3"><span class="s1">ab</span></p>
<p class="p3"><span class="s1">abcbaba</span></p>
<p class="p2"><span class="s1">a*b</span></p>
<p class="p3"><span class="s1"><b>Sample Output:</b></span></p>
<p class="p3"><span class="s1">8</span></p>
<p class="p3"><span class="s1">7</span></p>
<p class="p3"><span class="s1">1</span></p>
<p class="p2"><span class="s1">14</span></p>
<p class="p3"><span class="s1"><b>Explanation:</b></span></p>
<p class="p3"><span class="s1">For the first example, all subsequences (including the empty string) match the pattern "*".</span></p>
<p class="p3"><span class="s1">For the second example, note that the string "a" occurs as a subsequence of the text twice, but it should only be counted once.</span></p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/murdocc007">murdocc007</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>27-12-2014</td>
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
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.9.2, CPP14, CS2, D, ERL, FORT, FS, GO, HASK, ICK, ICON, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PERL6, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TCL, TEXT, WSPC</td>
        </tr>
    </table><?php require_once("../../includes/footer.php"); ?>