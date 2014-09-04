<?php require("../../includes/header.php"); ?><h1>Tourist</h1><div class="content">

<p align="center" class="MsoNormal">
        <b><u><span class="style1"></span></u></b></p>
<p class="MsoNormal">
        <span><br />
         </span></p>
<p class="MsoNormal">
        <span><br />
        A tourist came to Lahore to visit some cities but he<br />
        has short time to do so. He decided to go to Islamabad through a longest path so that he can visit<br />
        maximum area on his way to Islamabad.<br />
        Write such an algorithm which finds longest path between two cities.</span></p>
<p class="MsoNormal">
        <span><br />
         </span></p>
<p class="MsoNormal">
        <b><br />
        <span>Input</span></b></p>
<p class="MsoNormal">
        <span><br />
         </span></p>
<p class="MsoNormal">
        <span><br />
        <span> </span>You will get the total number of cities<br />
        (0&lt;city code&lt;10).</span></p>
<p class="MsoNormal">
        <span><br />
        <span> </span>You will be given two 2D arrays. First<br />
        row of the first array contains codes of those cities which are directly<br />
        connected to the first city. The second row of the first array contains codes of<br />
        those cities which are directly connected to the second city and so on.</span></p>
<p class="MsoNormal">
        <span><br />
        <span> </span>In second array the distance between two<br />
        cities is placed at the </span>
    </p>
<p class="MsoNormal">
        <span><br />
        corresponding location as the destination city in the first array.</span></p>
<p class="MsoNormal">
        <span><br />
        Single city should not be repeated in the longest path.</span></p>
<p class="MsoNormal">
        <b><br />
        <span>Output</span></b></p>
<p class="MsoNormal">
        <span><br />
        The output will contain the path from source city to destination city<br />
        <span>  </span>with maximum distance for each source<br />
        and destination city.</span><b><span></span></b></p>
<p class="MsoNormal">
        <b><br />
        <span>Sample Input</span></b></p>
<p class="MsoNormal">
        <span><br />
        5<span><br />
        </span>// number of cities</span></p>
<p class="MsoNormal">
        <span><br />
        2 3 4<span>         <br />
        </span>// start of first 2D array</span></p>
<p class="MsoNormal">
        <span><br />
        1 4 5</span></p>
<p class="MsoNormal">
        <span><br />
        1 4 5</span></p>
<p class="MsoNormal">
        <span><br />
        2 3 1</span></p>
<p class="MsoNormal">
        <span><br />
        2 3</span></p>
<p class="MsoNormal">
        <span><br />
        4 9 17<span>        <br />
        </span>// start of second 2D array</span></p>
<p class="MsoNormal">
        <span><br />
        4 9 13</span></p>
<p class="MsoNormal">
        <span><br />
        9 15 20</span></p>
<p class="MsoNormal">
        <span><br />
        9 15 17</span></p>
<p class="MsoNormal">
        <span><br />
        13 20</span></p>
<p class="MsoNormal">
        <span><br />
        5 3<span>            <br />
        </span>// source and destination cities</span></p>
<p class="MsoNormal">
        <span><br />
        1 4</span></p>
<p class="MsoNormal">
        <span><br />
        4 3</span></p>
<p class="MsoNormal">
        <span><br />
        0</span></p>
<p class="MsoNormal">
        <span><br />
         </span></p>
<p class="MsoNormal">
        <b><br />
        <span>Sample Output</span></b></p>
<p class="MsoNormal">
        <span><br />
        5 2 1 4 3<span>        <br />
        </span>// path from city 5 to 3 with maximum distance</span></p>
<p class="MsoNormal">
        <span><br />
        1 3 5 2 4</span></p>
<p class="MsoNormal">
        <span><br />
        4 2 5 3</span></p>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/rushikesh30">rushikesh30</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>11-03-2010</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>5 sec</td>
        </tr>
        <tr>
            <td width="14%">Source Limit:</td>
            <td>50000 Bytes</td>
        </tr>
        <tr>
            <td width="14%">Languages:</td>
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, ERL, FORT, FS, GO, HASK, ICK, ICON, JAR, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PERL6, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TEXT, WSPC</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>