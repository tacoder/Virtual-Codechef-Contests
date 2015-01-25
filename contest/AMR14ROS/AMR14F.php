<?php require_once("../../includes/header.php"); ?><h1>Jersey Number</h1><div class="content">
<p class="p1"><span class="s1">It’s World cup time, and every player wants to get a cool jersey number. As a result, there was a fight between the players about what jersey number they can have. To resolve this, the committee (ICC) came up with an idea. </span></p>
<p class="p4"><span class="s1">They gave a huge string and asked each player to walk in one by one, and select four indices in the string (i, j, k, l) such that i&lt;=j and k&lt;=l and the substrings S[i..j], S[k..l] should have a non-empty substring in common. Also, (i, j, k, l) should not have been chosen by any player who walked in earlier. If the player is able to give a correct answer (i, j, k, l), he gets "i-j-k-l" as his jersey number.</span></p>
<p class="p4"><span class="s1">Assuming that there are enough players to claim all valid jersey numbers, and that all players are equally smart (i.e if there is any valid (i, j, k, l), then they’ll give the right answer), find the number of distinct jersey numbers that can be assigned.</span></p>
<p class="p4"><span class="s2">Note:</span><span class="s1"> The huge string chosen by the ICC is hexadecimal. (Only contains ‘0’-‘9’ and upper-case characters ‘A’-‘F’).</span></p>
<p class="p5"><span class="s1"><b>Input:</b></span></p>
<p class="p5"><span class="s1">The first line of input contains a single integer ’T’, denoting the no. of test cases.</span></p>
<p class="p4"><span class="s1">Each of the following ’T’ lines contains a sting S, chosen by the ICC.</span></p>
<p class="p5"><span class="s1"><b>Output:</b></span></p>
<p class="p4"><span class="s1">Print one line for each test case, denoting the answer modulo 1000000007.</span></p>
<p class="p5"><span class="s1"><b>Constraints:</b></span></p>
<p class="p5"><span class="s1">1 &lt;= T &lt;= 200</span></p>
<p class="p5"><span class="s1">1 &lt;= |S| &lt;= 100000</span></p>
<p class="p5"><span class="s1">1 &lt;= Sum of |S| over all test cases &lt;= 1000000</span></p>
<p class="p4"><span class="s1">S is hexadecimal. (Only contains ‘0’-‘9’ and upper-case characters ‘A’-‘F’)</span></p>
<p class="p5"><span class="s1"><b>Sample Input:</b></span></p>
<p class="p5"><span class="s1">3</span></p>
<p class="p5"><span class="s1">AB</span></p>
<p class="p5"><span class="s1">ACC</span></p>
<p class="p4"><span class="s1">A2011</span></p>
<p class="p5"><span class="s1"><b>Sample Output:</b></span></p>
<p class="p5"><span class="s1">7</span></p>
<p class="p5"><span class="s1">30</span></p>
<p class="p4"><span class="s1">163</span></p>
<p class="p5"><span class="s1"><b>Explanation:</b></span></p>
<p class="p5"><span class="s1">For the case "AB", following are valid jersey numbers:</span></p>
<p class="p6"><span class="s1">{“1-1-1-1”, “1-1-1-2”, “1-2-1-1”, “1-2-1-2”, “1-2-2-2”, “2-2-1-2”, “2-2-2-2”}</span></p>
<p class="p7"> </p>
<p class="p8"> </p>    </div><table cellspacing="0" cellpadding="0" align="left">
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
            <td>4 sec</td>
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