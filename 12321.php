<?php 
   function formatTree($items, $id = 'id', $pid = 'pid', $son = 'subs') {
        $tree = array(); //��ʽ������
        $tmpMap = array();  //��ʱ��ƽ����

        foreach ($items as $item) {
            $tmpMap[$item[$id]] = $item;
        }

        foreach ($items as $item) {
            if (isset($tmpMap[$item[$pid]])) {
                $tmpMap[$item[$pid]][$son][] = &$tmpMap[$item[$id]];
            } else {
                $tree[] = &123$tmpMap[$item[$id]];
            }
        }
        unset($tmpMap);
12321321
        return $tree;
    }asdasd
    //2132112333333333
