<?php require("../../includes/header.php"); ?><h1>Windows</h1><div class="content">

<p class="MsoNormal">
            <span lang="RU">&nbsp; </span>
        </p>
<p class="MsoNormal">
            <span lang="RU" style="font-size:10.0pt;mso-bidi-font-size:<br />12.0pt;font-family:&quot;Verdana&quot;,&quot;sans-serif&quot;;mso-fareast-font-family:Verdana;<br />mso-bidi-font-family:Verdana">When displaying a collection of rectangular windows, a<br />
            critical step is determining whether two windows overlap, and, if so, where on<br />
            the screen the overlapping region lies. Write a program to perform this<br />
            function. Your program will accept as input the coordinates of two rectangular<br />
            windows. If the windows do not overlap, your program should produce a message to<br />
            the effect. If they do overlap, you should compute the coordinates of the<br />
            overlapping region (which must itself be a rectangle).</span><span lang="RU"><br />
            </span>
        </p>
<p class="MsoNormal">
            <span lang="RU" style="font-size:10.0pt;mso-bidi-font-size:<br />12.0pt;font-family:&quot;Verdana&quot;,&quot;sans-serif&quot;;mso-fareast-font-family:Verdana;<br />mso-bidi-font-family:Verdana">&nbsp;</span><span lang="RU"> </span>
        </p>
<p class="MsoNormal">
            <span lang="RU" style="font-size:10.0pt;mso-bidi-font-size:<br />12.0pt;font-family:&quot;Verdana&quot;,&quot;sans-serif&quot;;mso-fareast-font-family:Verdana;<br />mso-bidi-font-family:Verdana">&nbsp; All coordinates are expressed in &quot;pixel numbers&quot;,<br />
            integer values ranging from 0 to 9999. A rectangle will be described by two<br />
            pairs of (X, Y) coordinates. The first pair gives the coordinates of the lower<br />
            left hand corner (XLL, YLL). The second pair gives the coordinates of the upper<br />
            right hand coordinates (XUR, YUR). You are guaranteed that XLL&lt;XUR and YLL&lt;YUR.</span><span<br />
                lang="RU"> 
        </span<br></p>
<p class="MsoNormal">
            <span lang="RU" style="font-family:<br />&quot;Verdana&quot;,&quot;sans-serif&quot;;mso-fareast-font-family:Verdana;mso-bidi-font-family:<br />Verdana">&nbsp;</span><span lang="RU"> </span>
        </p>
<p class="MsoNormal">
            <b style="mso-bidi-font-weight:<br />normal"><span lang="RU" style="font-size:18.0pt;mso-bidi-font-size:12.0pt;<br />font-family:&quot;Verdana&quot;,&quot;sans-serif&quot;;mso-fareast-font-family:Verdana;mso-bidi-font-family:<br />Verdana">Input</span></b><span lang="RU"> </span>
        </p>
<p class="MsoNormal">
            <span lang="RU" style="font-family:&quot;Verdana&quot;,&quot;sans-serif&quot;;<br />mso-fareast-font-family:Verdana;mso-bidi-font-family:Verdana">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br />
            </span><br />
            <span lang="RU" style="font-size:10.0pt;mso-bidi-font-size:12.0pt;<br />font-family:&quot;Verdana&quot;,&quot;sans-serif&quot;;mso-fareast-font-family:Verdana;mso-bidi-font-family:<br />Verdana">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; The<br />
            first line will have a number N (0&lt;N&lt;=100) with the number of test cases. Each<br />
            test case will consists of two lines each containing four numbers. The first<br />
            line contains the integer numbers XLL, YLL, XUR and YUR for the first window.<br />
            The second contains the same numbers for the second window.</span><span<br />
                lang="RU"> 
        </span<br></p>
<p class="MsoNormal">
            <span lang="RU" style="font-family:<br />&quot;Verdana&quot;,&quot;sans-serif&quot;;mso-fareast-font-family:Verdana;mso-bidi-font-family:<br />Verdana">&nbsp;</span><span lang="RU"> </span>
        </p>
<p class="MsoNormal">
            <b style="mso-bidi-font-weight:normal"><br />
            <span lang="RU" style="font-size:18.0pt;mso-bidi-font-size:12.0pt;font-family:&quot;Verdana&quot;,&quot;sans-serif&quot;;<br />mso-fareast-font-family:Verdana;mso-bidi-font-family:Verdana">Output</span></b><span<br />
                lang="RU"> 
        </span<br></p>
<p class="MsoNormal">
            <span lang="RU" style="font-size:<br />10.0pt;mso-bidi-font-size:12.0pt;font-family:&quot;Verdana&quot;,&quot;sans-serif&quot;;mso-fareast-font-family:<br />Verdana;mso-bidi-font-family:Verdana">For each test case, if the two window do no overlap,<br />
            print the </span>
        </p>
<p class="MsoNormal">
            <span lang="RU" style="font-size:10.0pt;mso-bidi-font-size:<br />12.0pt;font-family:&quot;Verdana&quot;,&quot;sans-serif&quot;;mso-fareast-font-family:Verdana;<br />mso-bidi-font-family:Verdana">Message &quot;No Overlap&quot;. If the two windows do overlap, print 4<br />
            integer numbers giving the XLL, YLL, XUR and YUR for the region of overlap.&nbsp;<br />
            Note that two windows that share a common edge but have no other point in common<br />
            are considered to have &quot;No Overlap&quot;.</span><span lang="RU"> </span>
        </p>
<p class="MsoNormal">
            <span lang="RU" style="font-family:<br />&quot;Verdana&quot;,&quot;sans-serif&quot;;mso-fareast-font-family:Verdana;mso-bidi-font-family:<br />Verdana">&nbsp;</span><span lang="RU"> </span>
        </p>
<p class="MsoNormal">
            <b style="mso-bidi-font-weight:<br />normal"><span lang="RU" style="font-size:18.0pt;mso-bidi-font-size:12.0pt;<br />font-family:&quot;Verdana&quot;,&quot;sans-serif&quot;;mso-fareast-font-family:Verdana;mso-bidi-font-family:<br />Verdana">Sample Input</span></b><span lang="RU"> </span>
        </p>
<p class="MsoNormal">
            <span lang="RU" style="font-size:<br />10.0pt;mso-bidi-font-size:12.0pt;font-family:&quot;Verdana&quot;,&quot;sans-serif&quot;;mso-fareast-font-family:<br />Verdana;mso-bidi-font-family:Verdana">2</span><span lang="RU"> </span>
        </p>
<p class="MsoNormal">
            <span lang="RU" style="font-size:<br />10.0pt;mso-bidi-font-size:12.0pt;font-family:&quot;Verdana&quot;,&quot;sans-serif&quot;;mso-fareast-font-family:<br />Verdana;mso-bidi-font-family:Verdana">0 20 100 120</span><span lang="RU"> </span>
        </p>
<p class="MsoNormal">
            <span lang="RU" style="font-size:<br />10.0pt;mso-bidi-font-size:12.0pt;font-family:&quot;Verdana&quot;,&quot;sans-serif&quot;;mso-fareast-font-family:<br />Verdana;mso-bidi-font-family:Verdana">80 0 500 60</span><span lang="RU"> </span>
        </p>
<p class="MsoNormal">
            <span lang="RU" style="font-size:<br />10.0pt;mso-bidi-font-size:12.0pt;font-family:&quot;Verdana&quot;,&quot;sans-serif&quot;;mso-fareast-font-family:<br />Verdana;mso-bidi-font-family:Verdana">10 10 20 20</span><span lang="RU"> </span>
        </p>
<p class="MsoNormal">
            <span lang="RU" style="font-size:<br />10.0pt;mso-bidi-font-size:12.0pt;font-family:&quot;Verdana&quot;,&quot;sans-serif&quot;;mso-fareast-font-family:<br />Verdana;mso-bidi-font-family:Verdana">30 30 40 40</span><span lang="RU"> </span>
        </p>
<p class="MsoNormal">
            <span lang="RU" style="font-family:<br />&quot;Verdana&quot;,&quot;sans-serif&quot;;mso-fareast-font-family:Verdana;mso-bidi-font-family:<br />Verdana">&nbsp;</span><span lang="RU"> </span>
        </p>
<p class="MsoNormal">
            <b style="mso-bidi-font-weight:<br />normal"><span lang="RU" style="font-size:18.0pt;mso-bidi-font-size:12.0pt;<br />font-family:&quot;Verdana&quot;,&quot;sans-serif&quot;;mso-fareast-font-family:Verdana;mso-bidi-font-family:<br />Verdana">Sample Output</span></b><span lang="RU"> </span>
        </p>
<p class="MsoNormal">
            <span lang="RU" style="font-size:<br />10.0pt;mso-bidi-font-size:12.0pt;font-family:&quot;Verdana&quot;,&quot;sans-serif&quot;;mso-fareast-font-family:<br />Verdana;mso-bidi-font-family:Verdana">80 20 100 60</span><span lang="RU"> </span>
        </p>
<p class="MsoNormal">
            <span lang="RU" style="font-size:<br />10.0pt;mso-bidi-font-size:12.0pt;font-family:&quot;Verdana&quot;,&quot;sans-serif&quot;;mso-fareast-font-family:<br />Verdana;mso-bidi-font-family:Verdana">No Overlap</span><span lang="RU"> </span>
        </p>
<p class="MsoNormal">
            <span lang="RU" style="font-size:<br />10.0pt;mso-bidi-font-size:12.0pt;font-family:&quot;Verdana&quot;,&quot;sans-serif&quot;;mso-fareast-font-family:<br />Verdana;mso-bidi-font-family:Verdana">&nbsp;</span><span lang="RU"> </span>
        </p>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/rushikesh30">rushikesh30</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>25-02-2010</td>
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
            <td>C, C99 strict, CLOJ, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, FS, GO, JAVA, NODEJS, PERL6, PYTH 3.1.2, TEXT</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>