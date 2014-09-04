<?php require("../../includes/header.php"); ?><h1>Windows</h1><div class="content">

<p><span>When<br />
        displaying a collection of rectangular windows, a critical step is determining<br />
        whether two windows overlap, and, if so, where on the screen the overlapping<br />
        region lies. Write a program to perform this function. Your program will accept<br />
        as input the coordinates of two rectangular windows. If the windows do not<br />
        overlap, your program should produce a message to the effect. If they do<br />
        overlap, you should compute the coordinates of the overlapping region (which<br />
        must itself be a rectangle).</span></p>
<p>        <span><br />
         </span></p>
<p class="MsoNormal">
        <span><span> <br />
        </span>All coordinates are expressed in "pixel numbers", integer values ranging<br />
        from 0 to 9999. A rectangle will be described by two pairs of (X, Y)<br />
        coordinates. The first pair gives the coordinates of the lower left hand corner<br />
        (XLL, YLL). The second pair gives the coordinates of the upper right hand<br />
        coordinates (XUR, YUR). You are guaranteed that XLL&lt;XUR and YLL&lt;YUR.</span></p>
<p class="MsoNormal">
        <span> </span></p>
<p class="MsoNormal">
        <span><br />
        <span> </span></span><b><span>Input</span></b></p>
<p class="MsoNormal">
        <span><br />
        <span>         <br />
        </span></span><br />
        <span><br />
        <span>         <br />
        </span></span><br />
        <span>The first line will have a<br />
        number N (0&lt;N&lt;=100) with the number of test cases. Each test case will consists<br />
        of two lines each containing four numbers. The first line contains the integer<br />
        numbers XLL, YLL, XUR and YUR for the first window. The second contains the same<br />
        numbers for the second window.</span><span></span></p>
<p class="MsoNormal">
        <span> </span></p>
<p class="MsoNormal">
        <b><br />
        <span><br />
        Output</span></b></p>
<p class="MsoNormal">
        <span><br />
        For each test case, if the two window do no overlap, print the<br />
        </span>
    </p>
<p class="MsoNormal">
        <span><br />
        Message "No Overlap". If the two windows do overlap, print 4 integer numbers<br />
        giving the XLL, YLL, XUR and YUR for the region of overlap.<span>  </span>Note that two windows that share a<br />
        common edge but have no other point in common are considered to have "No<br />
        Overlap".</span><span></span></p>
<p class="MsoNormal">
        <span> </span></p>
<p class="MsoNormal">
        <b><span>Sample Input</span></b></p>
<p class="MsoNormal">
        <span>2</span></p>
<p class="MsoNormal">
        <span>0 20<br />
        100 120</span></p>
<p class="MsoNormal">
        <span>80 0<br />
        500 60</span></p>
<p class="MsoNormal">
        <span>10 10<br />
        20 20</span></p>
<p class="MsoNormal">
        <span>30 30<br />
        40 40</span></p>
<p class="MsoNormal">
        <span> </span></p>
<p class="MsoNormal">
        <b><span>Sample Output</span></b></p>
<p class="MsoNormal">
        <span>80 20<br />
        100 60</span></p>
<p class="MsoNormal">
        <span>No<br />
        Overlap</span></p>
<p class="MsoNormal">
        <span> </span></p>
<p class="MsoNormal">
        <span> </span></p>
<p class="MsoNormal">
        <span> </span></p>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/rushikesh30">rushikesh30</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>10-03-2010</td>
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
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, ERL, FORT, FS, GO, HASK, ICK, ICON, JAR, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PERL6, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TEXT, WSPC</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>