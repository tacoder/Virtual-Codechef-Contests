<?php require_once("../../includes/header.php"); ?><h1>Artist Rivalry</h1><div class="content">
<p class="p1"><span class="s1">The opening ceremony of the 2015 World Cup will be organized in Christchurch, New Zealand on the 14th of February, 2015.</span></p>
<p class="p5"><span class="s1">The World Cup organizers have planned an artwork in the form of huge grey circles with black boundaries. They hired number of artists to paint these N circles with each artist painting one circle. However, the artists got carried away by their rivalry and painted over each other’s work, resulting in the some circles overlapping with each other. When two circles overlap, only the later painted one is fully visible, and the earlier painted one and its boundary are partly obscured by the later painted one. The organizers are interested in knowing the total length of the visible black boundary after all N circles have been painted.</span></p>
<p> <img src="https://codechef_shared.s3.amazonaws.com/download/AMR14J.png" /><br />
</p><p class="p6"><span class="s1"> </span></p>
<p class="p7"><span class="s1"><b>Input:</b></span></p>
<p class="p7"><span class="s1">The first line contains the number of test cases, T.</span></p>
<p class="p7"><span class="s1">For each test case, the first line contains N, the total number of circles. Each of the next N lines contains 3 space-separated integers xi, yi and ri, where (xi, yi) is the centre and ri is the radius of the i-th circle. Assumption is that the ith circle will be painted after the 1 to (i-1)th circles and will obscure the intersecting parts of any of these circles that it overlaps with.</span></p>
<p class="p7"><span class="s2">Note</span><span class="s1"><b>: </b>No 2 circles will overlap completely. In other words, no 2 circles will have the same center and same radius.</span></p>
<p class="p9"> </p>
<p class="p7"><span class="s1"><b>Output:</b></span></p>
<p class="p4"><span class="s1">For each test case, output the length of the total visible boundary colored black. Absolute error of upto 10^-6 is allowed.</span></p>
<p class="p9"><span class="s1"><b>Constraints:</b></span></p>
<p class="p7"><span class="s1">1 ≤ T ≤ 100</span></p>
<p class="p7"><span class="s1">1 ≤ N ≤ 100</span></p>
<p class="p10"><span class="s1">-10^6 &lt;= yi &lt;= 10^6</span></p>
<p class="p10"><span class="s1">-10^6 &lt;= yi &lt;= 10^6</span></p>
<p class="p11"><span class="s1">    1 &lt;= ri &lt;= 10^6</span></p>
<p class="p7"><span class="s1"><b>Sample Input:</b></span></p>
<p class="p7"><span class="s1">2</span></p>
<p class="p7"><span class="s1">2</span></p>
<p class="p7"><span class="s1">0 0 100</span></p>
<p class="p7"><span class="s1">300 0 100</span></p>
<p class="p7"><span class="s1">2</span></p>
<p class="p7"><span class="s1">0 0 100</span></p>
<p class="p4"><span class="s1">150 0 100</span></p>
<p class="p7"><span class="s1"><b>Sample Output:</b></span></p>
<p class="p7"><span class="s1">1256.637061</span></p>
<p class="p4"><span class="s1">1112.090212</span></p>
<p class="p7"><span class="s1"><b>Explanation:</b></span></p>
<p class="p12"><span class="s1">For the first example, both circles' boundary is completely visible.</span></p>
<p class="p13"><span class="s1">For the second example, first circle's boundary is partially visible and second circle's boundary is completely visible.</span></p>
<p class="p14"> </p>    </div><table cellspacing="0" cellpadding="0" align="left">
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