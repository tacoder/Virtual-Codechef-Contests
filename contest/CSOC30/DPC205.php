<?php require("../../includes/header.php"); ?><h1>Politics</h1><div class="content">

<p align="center" class="MsoNormal">
        <b><u><br />
        <span><br />
        Politics</span></u></b></p>
<p class="MsoNormal">
        <span><br />
         </span></p>
<p class="MsoNormal">
        <span><br />
        Leaders of N political parties agree to have a conference to resolve a political<br />
        issue through discussion. However due to animosity between parties and leaders,<br />
        some of the leaders may dislike sitting next to leaders specified by them. The<br />
        problem is to determine, if possible, sitting arrangements on the table, so that<br />
        a leader is not required to sit next to another leader disliked by him/her.<br />
        Leaders are identified by integers 1,2,..,N. It may be noted that if a leader<br />
        ‘i’ dislikes sitting next to another leader ‘j’, then the leader ‘j’ may not<br />
        necessarily dislike sitting next to leader ‘i’. However in such a case ‘i’ and<br />
        ‘j’ cannot sit next to each other because ‘i’ dislikes ‘j’.</span></p>
<p class="MsoNormal">
        <span><br />
         </span></p>
<p class="MsoNormal">
        <span><br />
        An arrangement is represented by a sequence of N integers 1,2,…,N indicating the<br />
        relative position of each leader. In case of more than one arrangement, the<br />
        arrangements are to be printed in lexicographic order.</span></p>
<p class="MsoNormal">
        <span><br />
        Write a program to print all possible sitting arrangements for the conference.</span></p>
<p class="MsoNormal">
        <span><br />
         </span></p>
<p class="MsoNormal">
        <b><br />
        <span>Input:</span></b></p>
<p class="MsoNormal">
        <span><br />
        The input may contain multiple test cases. The first line of each test case<br />
        contains the case number ‘c’ and the total number of leaders N where N will be<br />
        less than 100. Each of the next N lines contains N 0’s or 1’s. If the value in i<sup>th</sup><br />
        row and j<sup>th</sup> column contains 1, then the i<sup>th</sup> leader cannot<br />
        sit with j<sup>th</sup> leader. This is true for all I,j=1,2,…,N. The input<br />
        terminates with a single 0 in the last line.</span></p>
<p class="MsoNormal">
        <span><br />
         </span></p>
<p class="MsoNormal">
        <b><br />
        <span>Output:</span></b></p>
<p class="MsoNormal">
        <span><br />
        For each test case, print the case number ‘c’ and the total number of possible<br />
        arrangements ‘k’ in first line with a single space between them. Each of the<br />
        next k lines prints an arrangements in lexicographical order separated with a<br />
        single space.</span></p>
<p class="MsoNormal">
        <span><br />
         </span></p>
<p class="MsoNormal">
        <b><br />
        <span>Sample Input</span></b></p>
<p class="MsoNormal">
        <span><br />
        1 5</span></p>
<p class="MsoNormal">
        <span><br />
        11010</span></p>
<p class="MsoNormal">
        <span><br />
        01001</span></p>
<p class="MsoNormal">
        <span><br />
        00100</span></p>
<p class="MsoNormal">
        <span><br />
        10010</span></p>
<p class="MsoNormal">
        <span><br />
        01011</span></p>
<p class="MsoNormal">
        <span><br />
        2 6</span></p>
<p class="MsoNormal">
        <span><br />
        101100</span></p>
<p class="MsoNormal">
        <span><br />
        010001</span></p>
<p class="MsoNormal">
        <span><br />
        101000</span></p>
<p class="MsoNormal">
        <span><br />
        100110</span></p>
<p class="MsoNormal">
        <span><br />
        001011</span></p>
<p class="MsoNormal">
        <span><br />
        010011</span></p>
<p class="MsoNormal">
        <span><br />
        0</span></p>
<p class="MsoNormal">
        <b><br />
        <span>Sample Output</span></b></p>
<p class="MsoNormal">
        <span><br />
        1 0</span></p>
<p class="MsoNormal">
        <span><br />
        2 2</span></p>
<p class="MsoNormal">
        <span><br />
        1 5 2 3 4 6</span></p>
<p class="MsoNormal">
        <span><br />
        1 5 2 4 3 6</span></p>
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