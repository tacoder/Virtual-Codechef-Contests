<?php require_once("../../includes/header.php"); ?><h1>Road Decoration</h1><div class="content">
<p class="p4"><span class="s1">Australia and New Zealand have started working on preparation for the World Cup 2015. There are N important venues (like hotels and stadiums) in the city. Out of these important venues, there is one central location where the opening and closing ceremony will be held. There is an existing network of bidirectional roads connecting these venues. The organizing committee has planned to decorate some of these roads that will be used for commuting. They have decided to choose the roads to decorate such that there is exactly one decorated path to all the venues from the central location.</span></p>
<p class="p5"><span class="s1">New Zealand is supposed to decorate these roads and Australia has taken up the responsibility of providing transportation. Only decorated roads can be used for transportation. Australia wanted to save fuel costs, and so they wanted to choose the decorated roads to minimize the total sum of distances to all venues from the central location. However, New Zealand had their own plans to minimize decoration cost by choosing the decorated roads such that the sum of the length of the chosen roads will be minimized.</span></p>
<p class="p4"><span class="s1">To prevent a fight breaking out between these two rivals before they even step on to the field, you have to help them by reporting if there is a solution in which the two rivals could choose the same set of roads while satisfying their respective constraints.</span></p>
<p class="p6"><span class="s1"><b>Input:</b></span></p>
<p class="p6"><span class="s1">The first line contains the number of test cases T.</span></p>
<p class="p6"><span class="s1">For each test first line contains N and M which are number of venues and total number of roads respectively.</span></p>
<p class="p6"><span class="s1">Then next M lines for each case contains u, v and w - indicating that there is a bidirectional road of distance w between locations u and v.</span></p>
<p class="p4"><span class="s1">The central location is identified with location 0.</span></p>
<p class="p6"><span class="s1"><b>Output:</b></span></p>
<p class="p6"><span class="s1">For each test case, output the required answer on a separate line. If there is a valid plan, then print “YES”. Else, print “NO” (quotes for clarity).</span></p>
<p class="p4"><span class="s1">Note: If any of the venues is not reachable from the central location, then print “NO”.</span></p>
<p class="p6"><span class="s1"><b>Constraints:</b></span></p>
<p class="p6"><span class="s1">1 &lt;= T &lt;= 10000</span></p>
<p class="p6"><span class="s1">1 &lt;= N &lt;= 20000</span></p>
<p class="p6"><span class="s1">0 &lt;= M &lt;= 40000</span></p>
<p class="p6"><span class="s1">0 &lt;= u &lt; N</span></p>
<p class="p6"><span class="s1">0 &lt;= v &lt; N</span></p>
<p class="p6"><span class="s1">u != v</span></p>
<p class="p6"><span class="s1">1 &lt;= w &lt;= 10^9</span></p>
<p class="p6"><span class="s1">The sum of values of N over all test cases will not be more than 1000000.</span></p>
<p class="p6"><span class="s1">The sum of values of M over all test cases will not be more than 2000000.</span></p>
<p class="p7"> </p>
<p class="p6"><span class="s1"><b>Example</b>:</span></p>
<p class="p6"><span class="s1"><b>Sample Input:</b></span></p>
<p class="p6"><span class="s1">3</span></p>
<p class="p6"><span class="s1">3 3</span></p>
<p class="p6"><span class="s1">0 1 1</span></p>
<p class="p6"><span class="s1">0 2 2</span></p>
<p class="p6"><span class="s1">1 2 2</span></p>
<p class="p6"><span class="s1">3 1</span></p>
<p class="p6"><span class="s1">0 1 1</span></p>
<p class="p6"><span class="s1">4 5</span></p>
<p class="p6"><span class="s1">2 1 9</span></p>
<p class="p6"><span class="s1">3 2 5</span></p>
<p class="p6"><span class="s1">0 3 9</span></p>
<p class="p6"><span class="s1">0 1 2</span></p>
<p class="p6"><span class="s1">3 1 9</span></p>
<p class="p7"> </p>
<p class="p6"><span class="s1"><b>Sample Output:</b></span></p>
<p class="p6"><span class="s1">YES</span></p>
<p class="p6"><span class="s1">NO</span></p>
<p class="p6"><span class="s1">NO</span></p>
<p class="p7"> </p>
<p class="p6"><span class="s1"><b>Explanation:</b></span></p>
<p class="p6"><span class="s1">For the first case, both of them can choose the roads {0&lt;--&gt;1, 0&lt;--&gt;2}.</span></p>
<p class="p6"><span class="s1">For the second case, venue 2 is not reachable from the central location 0.</span></p>
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
            <td>6 sec</td>
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