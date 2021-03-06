<?php require("../../includes/header.php"); ?><h1>An unfortunate incident</h1><div class="content">

<p align="justify">Terrorists from Dystopia had always been targeting Utopian civilians, but this is a new low that they have reached.</p>
<p align="justify">A psychotic terrorist, disguised as a teacher, has taken some kindergarten students hostage. She first made every student write the names of the other students (s)he likes on a piece of paper and collected these "like lists". Now she plans to do the following:</p>
<p align="justify">She will select a set of students at random from the lot. Then she will look at the "like lists" collected from the entire class. If a like list has the name of at least one selected student, it is considered a favourable like list. If the number of favourable like lists is greater than or equal to the number of students selected, she sends them back and picks another set of students. However, if the number of favourable like lists is less than the number of students selected, she plans to kill the selected students.</p>
<p align="justify">You will be given the like lists of all the students. Your task is find out whether the class is safe or not. The class is said to be not safe if the terrorist can pick some set of students such that the total number of favourable like lists for them is less than the number of selected students, resulting in their execution.</p>
<h3>Input</h3>
<p align="justify">The first line of the input contains T, the number of test cases (T ≤ 10). Following this are the descriptions of the test cases. The description of each test case begins with a line containing the integer N, the number of students held hostage (N ≤ 500). The students are numbered from 0 to N-1. Following this are N lines describing the N like lists : The first line after N describes the like list of student 0, the second line the like list of student 1 and so on. Each like list contains some space separated integers. The first integer is K, the number of students the student likes (0 ≤ K ≤ min(50,N-1)). Following this are the identities of the students (s)he likes. The identities of the students will be between 0 and N-1. You are assured that no number will appear more than once in the list, and that no student will have his own number in the list.</p>
<h3>Output</h3>
<p align="justify">For each test case, output "safe" if all the children are safe and "not safe" otherwise, according to the definition in the problem statement (quotes for clarity).</p>
<p><h3>Example</h3>
<pre>
<b>Input:</b>
2
3
2 1 2
2 2 0
2 0 1
3
2 1 2
1 0
1 0

<b>Output:</b>
safe
not safe
</pre></p>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/razimantv">razimantv</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>12-01-2012</td>
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
            <td>C, C99 strict, CPP 4.3.2, CPP 4.8.1, CPP11, GO, JAVA, NODEJS, PAS fpc, PAS gpc, PYTH, PYTH 3.1.2</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>