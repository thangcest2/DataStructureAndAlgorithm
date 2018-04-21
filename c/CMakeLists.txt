cmake_minimum_required(VERSION 3.8)
project(c)

set(CMAKE_CXX_STANDARD 11)

set(SOURCE_FILES
        boarding_pass.c)

add_executable(c ${SOURCE_FILES})